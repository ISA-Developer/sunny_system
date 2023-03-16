<?php

namespace App\Http\Requests\Auth;

use Exception;
use Illuminate\Auth\Events\Lockout;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class LoginRequest extends FormRequest
{
    protected $loginField;
    protected $loginValue;

    protected function prepareForValidation()
    {
        $this->loginField = filter_var($this->input('username_email'), FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        $this->loginValue = $this->input('username_email');
        $this->merge([$this->loginField => $this->loginValue]);
    }

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'username' => ['required_without:email', 'string'],
            'email' => ['required_without:username', 'string', 'email'],
            'password' => ['required', 'string'],
        ];
    }

    /**
     * Attempt to authenticate the request's credentials.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function authenticate(): void
    {
        $this->ensureIsNotRateLimited();

        if (! Auth::attempt($this->only($this->loginField, 'password'), $this->boolean('remember'))) {
            RateLimiter::hit($this->throttleKey());

            throw ValidationException::withMessages([
                'username_email' => 'Username/Email is wrong',
            ]);
        }

        // check user is active
        $user = Auth::user();
        if(!$user->is_active) {
            throw ValidationException::withMessages([
                'username_email' => 'Username/Email is wrong',
            ]);
        }

        RateLimiter::clear($this->throttleKey());
    }

    /**
     * Ensure the login request is not rate limited.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function ensureIsNotRateLimited(): void
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        event(new Lockout($this));

        $seconds = RateLimiter::availableIn($this->throttleKey());

        throw ValidationException::withMessages([
            'username_email' => trans('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    /**
     * Get the rate limiting throttle key for the request.
     */
    public function throttleKey(): string
    {
        return Str::transliterate(Str::lower($this->input('username_email')).'|'.$this->ip());
    }

    /** Custom Logic */

    public function authenticateJson()
    {
        try {
            $this->authenticate();
        } catch (\Exception $e) {
            
            // minus handle for rate limiter

            return response()->json([
                'success' => false,
                'message' => 'Authentication failed',
                'errors' => [
                    'username_email' => 'Username or Email is wrong',
                    'password' => 'Password is wrong'
                ]
            ], 401);
        }

        $this->session()->regenerate();
        return response()->json([
            'success' => true,
            'message' => 'Login Success'
        ]);
    }

    public function authenticateSanctum()
    {
        try {
            $this->authenticate();
        } catch (ValidationException $e) {

            // minus handle for rate limiter

            return response()->json([
                'success' => false,
                'message' => 'Authentication failed',
                'errors' => [
                    'username_email' => 'Username or Email is wrong',
                    'password' => 'Password is wrong'
                ]
            ], 401);
        }

        $user = Auth::user();
        $token =  $user->createToken(
            name: 'APIToken',
            expiresAt: now()->addDays(30),
        );

        return response()->json([
			'success' => true,
            'message' => 'Login successfully',
            'authentication' => [
                'username' => $user->username,
                // 'fullName' => ,
                // 'ability' => 
            ],
			'accessToken' => [
                'token' => $token->plainTextToken,
                'expiresAt' => $token->accessToken->expires_at
            ],
		], 200);
    }

    public function attributes()
    {
        return [
            'username' => 'Username/Email',
            'email' => 'Username/Email',
            'password' => 'Password'
        ]; 
    }

    public function messages()
    {
        return [
            'required' => ':attribute is required',
            'required_without' => ':attribute is required',
            'email' => ':attribute is invalid',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $response = [
            'success' => false,
            'message' => 'Validation failed',
            'errors' => $validator->errors(),
        ];
        
        throw new HttpResponseException(response()->json($response, 422));
    }
}
