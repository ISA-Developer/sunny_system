<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cookie;
use RealRashid\SweetAlert\Facades\Alert;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('1_dashboard');
    });
    Route::resource('/account', UserController::class);
    Route::post('/account/new',  [UserController::class, 'create']);
    Route::get('/account/view/{uuid}',  [UserController::class, 'view']);
    Route::post('/account/update',  [UserController::class, 'update']);
    Route::post('/account/password/reset',  [UserController::class, 'resetPassword']);
    Route::delete('/account/delete/{id}',  [UserController::class, 'delete']);
    Route::post('/dashboard-login', function (Request $request) {
        // Redirect::to('localhost:8000/api/login');
        // dd($request, $UserName, $UserPassword );
        // $credentials = $request->validate([
        //     'UserName' => ["required", "email"],
        //     'UserPassword' => ["required"]
        // ]);
        // $token = STR::random(50);
        // $data = [
        //     'email' => $UserName,
        //     'password' => $UserPassword
        // ];
        // if (Auth::attempt($data)) {
        //     $user = auth()->user();
        //     $token_user = $user->createToken($user->name)->plainTextToken;
        //     // dd($token_user);
        //     auth()->user()->forceFill([
        //         "remember_token" => $token_user,
        //     ])->save();
        //     return response()->json([
        //         "token" => $token_user,
        //         "user" => $user,
        //     ])->cookie("BPMCSRF", $token, 60);
        // }
        // return Redirect::to('https://crm.wika.co.id/api/login');
        $loginSukses = true;
        Alert::success("Success", "Login Berhasil");
        return view('1_dashboard', compact(["loginSukses"]));
    });
    Route::get('/metronic', function () {
        return view('dashboardMetronic');
    });
    Route::get('/dashboard', function () {
        return view('1_dashboard');
    });
    Route::get('/dashboard-unit-1', function () {
        return view('dashboard_unit_1');
    });
    Route::get('dashboard-unit-2', function () {
        return view('dashboard_unit_2');
    });
    Route::get('dashboard-unit-3', function () {
        return view('dashboard_unit_3');
    });
    Route::get('dashboard-unit-4', function () {
        return view('dashboard_unit_4');
    });
    Route::get('dashboard-unit-5', function () {
        return view('dashboard_unit_5');
    });
    Route::get('dashboard-unit-6', function () {
        return view('dashboard_unit_6');
    });
    Route::get('dashboard-unit-7', function () {
        return view('dashboard_unit_7');
    });
    Route::get('dashboard-unit-8', function () {
        return view('dashboard_unit_8');
    });
    Route::get('dashboard-unit-9', function () {
        return view('dashboard_unit_9');
    });
    Route::get('/setting', function () {
        $default = Cookie::get('default');
        $color = Cookie::get('color');
        $active = Cookie::get('active');
        $chartColor = Cookie::get('chart');
        // $chartColor = ["#017EB8", "#28B3AC", "#F7AD1A", "#9FE7F5", "#E86340", "#063F5C"];
        // dd($color, $active);
        return view('9_setting', compact(['color', 'active', 'chartColor', 'default']));
    });
    Route::post('/setting/cookie', function (Request $request) {
        // $response = new Response('Cookie');
        // $response->withCookie(cookie('color', $request["aside-color"]);
        // dd($request["chart-color"]);
        // $data = $request->all();
        // dd($data);
        if (empty($request["default"])) {
            $color = cookie()->forever('color', $request["aside-color"]);
            $active = cookie()->forever('active', $request["active-color"]);
            $chartColor = cookie()->forever('chart', $request["chart-color"]);
            $default = cookie()->forever('default', '');
        } else {
            $color = cookie()->forever('color', '#0F2846');
            // $color = cookie()->forever('color', '#535353');
            $active = cookie()->forever('active', "#F39A06");
            // $active = cookie()->forever('active', "#ffa800");
            $chartColor = cookie()->forever('chart', '');
            $default = cookie()->forever('default', 'true');
        }
        //  dd($request);
        //  dd($color, $active, $chartColor, $request->get('chart-color'));
        return redirect()->back()->withCookies([$default, $color, $active, $chartColor]) ;
    });

    // Breeze default
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
