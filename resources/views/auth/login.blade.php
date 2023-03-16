<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Sunny System') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
        <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/style.bundle.css") }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset("assets/plugins/global/plugins.bundle.css") }}" />

        <style>
            @font-face {
                font-family: 'SunnyFont';
                src: url("/assets/font/Sunny.woff");
            }
    
            @font-face {
                font-family: 'SunnyFontlight';
                src: url("/assets/font/SunnyLight.woff");
            }

            .sunny-font {
                font-family: SunnyFont
            }

            .form-control.form_control_solid {
                background-color: #f5f8fa;
                color: #5e6278;
                transition: color .2s ease,background-color .2s ease;
            }
        </style>
    </head>
    
    <body id="kt_body" class="sunny-font" style="background-color:#fafafa;">
        <div class="d-flex flex-column flex-root">
            <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed">
                <div class="d-flex flex-center flex-column flex-column-fluid p-10">    
                    <div class="w-lg-400px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
                        <form class="form w-100" id="login_form" >
                            <div class="text-center mb-10">
                                <a href="#" class="mb-12">
                                    <img alt="Logo" height="60"src="{{ asset("assets/media/logos/logo-gray-2.png") }}" />
                                </a>
                            </div>
                            <div class="fv-row mb-5">
                                <label 
                                    for="username_email" 
                                    class="text-gray-600 fs-5 fw-semibold">
                                    Username/Email
                                </label>
                                <input 
                                    class="form-control form-control-lg form_control_solid" 
                                    type="text"
                                    name="username_email" 
                                    id="username_email"/>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="fv-row mb-5">
                                <label 
                                    for="password" 
                                    class="text-gray-600 fs-5 fw-semibold">
                                    Password
                                </label>
                                <input 
                                    class="form-control form-control-lg form_control_solid" 
                                    type="password" 
                                    name="password" 
                                    id="password"/>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-bold mb-8">
                                <a href="{{ route('password.request') }}" 
                                    class="link-primary fs-5">
                                    Forgot your password ?
                                </a>
                            </div>

                            <button type="submit" class="btn btn-lg btn-primary w-100 mb-5" style="background-color:#ffa62b;">
                                <span class="indicator-label fw-semibold">LOGIN</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                </span>
                            </button>

                            <div class="text-center text-muted text-uppercase fw-bolder mb-5">
                                or
                            </div>

                            <a 
                                href="#" 
                                class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
                                <img alt="Logo" src="{{ asset("assets/media/svg/brand-logos/google-icon.svg") }}" class="h-20px me-3" />
                                Continue with Google
                            </a>
                            <a 
                                href="#" 
                                class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
                                <img alt="Logo" src="{{ asset("assets/media/svg/brand-logos/facebook-4.svg") }}" class="h-20px me-3" />
                                Continue with Facebook
                            </a>
                            <a 
                                href="#" 
                                class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
                                <img alt="Logo" src="{{ asset("assets/media/svg/brand-logos/twitter.svg") }}" class="h-20px me-3" />
                                Continue with Twitter
                            </a>
                            <a 
                                href="#" 
                                class="btn btn-flex flex-center btn-light btn-lg w-100">
                                <img alt="Logo" src="{{ asset("assets/media/svg/brand-logos/linkedin.svg") }}" class="h-20px me-3" />
                                Continue with Linkedin
                            </a>
                        </form>
                    </div>
                </div>

                <div class="text-center">
                    <span class="text-muted fw-bold me-1">© 2023</span>
                    <a href="https://sunny.co.id" target="_blank" class="text-gray-600 text-hover-primary">PT Sani Mentari Indonesia</a>

                    <div class="mt-5 mb-10">
                        <a href="https://sunny.co.id" target="_blank" class="menu-link px-2 text-gray-600">About</a>
                        <a href="https://sunny.co.id" target="_blank" class="menu-link px-2 text-gray-600">Support</a>
                        <a href="https://sunny.co.id" target="_blank" class="menu-link px-2 text-gray-600">API</a>
                        <a href="https://sunny.co.id" target="_blank" class="menu-link px-2 text-gray-600">Privacy</a>
                        <a href="https://sunny.co.id" target="_blank" class="menu-link px-2 text-gray-600">Term</a>
                        <a href="https://sunny.co.id" target="_blank" class="menu-link px-2 text-gray-600">Location</a>
                    </div>
                </div>    
            </div>
        </div>

        <script src="{{ asset("assets/plugins/global/plugins.bundle.js") }}"></script>
        <script src="{{ asset("assets/js/scripts.bundle.js") }}"></script>
        @vite([
            'resources/css/app.css', 
            'resources/js/app.js',
            'resources/js/app/auth/login.js'
        ])
    </body>
</html>
