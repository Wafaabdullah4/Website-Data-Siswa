@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Contact Form Template</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="/build/tailwind.css" type="text/css" media="screen" title="no title" charset="utf-8" />
    </head>

    <body class>
        <div class="lg:flex bg-white">
            <div class="lg:w-1/2 xl:max-w-screen-sm">
                <div class="py-12 bg-indigo-100 lg:bg-white flex justify-center lg:justify-start lg:px-12">
                    <div class="cursor-pointer flex items-center">
                        <div>
                            {{-- <svg class="w-10 text-indigo-500" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px"
                                y="0px" viewBox="0 0 225 225" style="enable-background:new 0 0 225 225;"
                                xml:space="preserve">
                                <style type="text/css">
                                    .st0 {
                                        fill: none;
                                        stroke: currentColor;
                                        stroke-width: 20;
                                        stroke-linecap: round;
                                        stroke-miterlimit: 3;
                                    }
                                </style>
                                <g transform="matrix( 1, 0, 0, 1, 0,0) ">
                                    <g>
                                        <path id="Layer0_0_1_STROKES" class="st0"
                                            d="M173.8,151.5l13.6-13.6 M35.4,89.9l29.1-29 M89.4,34.9v1 M137.4,187.9l-0.6-0.4     M36.6,138.7l0.2-0.2 M56.1,169.1l27.7-27.6 M63.8,111.5l74.3-74.4 M87.1,188.1L187.6,87.6 M110.8,114.5l57.8-57.8" />
                                    </g>
                                </g>
                            </svg> --}}

                            <svg width="90" height="90" viewBox="0 0 75 75" fill="none"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                class="w-10 text-indigo-700">
                                <circle cx="37.5" cy="37.5" r="37.5" fill="url(#pattern0)" />
                                <defs>
                                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1"
                                        height="1">
                                        <use xlink:href="#image0_42_90" transform="scale(0.00555556)" />
                                    </pattern>
                                    <image id="image0_42_90" width="180" height="180"
                                        xlink:href="data:image/png;base64,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" />
                                </defs>
                            </svg>

                        </div>
                        <div class="text-2xl text-indigo-800 tracking-wide ml-2 font-semibold">Smk Prakarya Internasional
                        </div>
                    </div>
                </div>
                <div class="mt-10 px-12 sm:px-24 md:px-48 lg:px-12 lg:mt-16 xl:px-24 xl:max-w-2xl">
                    <h2
                        class="text-center text-4xl text-indigo-900 font-display font-semibold lg:text-left xl:text-5xl
                    xl:text-bold">
                        Log in</h2>
                    <div class="mt-12">
                        {{-- form --}}
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div>
                                <label for="email"
                                    class="text-sm font-bold text-gray-700 tracking-wide">{{ __('Email Address') }}</label>
                                <input id="email" type="email"
                                    class="w-full text-lg py-2 border-b border-gray-300 focus:outline-none focus:border-indigo-500 form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mt-8">
                                <div class="flex justify-between items-center">
                                    <label for="password"
                                        class="text-sm font-bold text-gray-700 tracking-wide">{{ __('Password') }}</label>

                                    <div>
                                        <a
                                            class="text-xs font-display font-semibold text-indigo-600 hover:text-indigo-800
                                        cursor-pointer">
                                            Forgot Password?
                                        </a>
                                    </div>
                                </div>
                                <input id="password" type="password"
                                    class="w-full text-lg py-2 border-b border-gray-300 focus:outline-none focus:border-indigo-500 form-control @error('password') is-invalid @enderror"
                                    name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mt-10">
                                <button
                                    class="bg-indigo-500 text-gray-100 p-4 w-full rounded-full tracking-wide
                                font-semibold font-display focus:outline-none focus:shadow-outline hover:bg-indigo-600
                                shadow-lg">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </form>
                        {{-- endform --}}
                        <div class="mt-12 text-sm font-display font-semibold text-gray-700 text-center">
                            Don't have an account ? <a class="cursor-pointer text-indigo-600 hover:text-indigo-800">Sign
                                up</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden lg:flex items-center justify-center bg-indigo-100 flex-1 h-screen">
                <div class="max-w-xs transform duration-200 hover:scale-110 cursor-pointer">
                    <svg class="w-5/6 mx-auto" xmlns="http://www.w3.org/2000/svg" id="f080dbb7-9b2b-439b-a118-60b91c514f72"
                        data-name="Layer 1" viewBox="0 0 528.71721 699.76785">
                        <title>Login</title>
                        <rect y="17.06342" width="444" height="657" fill="#535461" />
                        <polygon points="323 691.063 0 674.063 0 17.063 323 0.063 323 691.063" fill="#7f9cf5" />
                        <circle cx="296" cy="377.06342" r="4" fill="#535461" />
                        <polygon
                            points="296 377.66 298.773 382.463 301.545 387.265 296 387.265 290.455 387.265 293.227 382.463 296 377.66"
                            fill="#535461" />
                        <polygon points="337 691.063 317.217 691 318 0.063 337 0.063 337 691.063" fill="#7f9cf5" />
                        <g opacity="0.1">
                            <polygon points="337.217 691 317.217 691 318.217 0 337.217 0 337.217 691" fill="#fff" />
                        </g>
                        <circle cx="296" cy="348.06342" r="13" opacity="0.1" />
                        <circle cx="296" cy="346.06342" r="13" fill="#535461" />
                        <line x1="52.81943" y1="16.10799" x2="52.81943" y2="677.15616" fill="none" stroke="#000"
                            stroke-miterlimit="10" stroke-width="2" opacity="0.1" />
                        <line x1="109.81943" y1="12.10799" x2="109.81943" y2="679.15616" fill="none"
                            stroke="#000" stroke-miterlimit="10" stroke-width="2" opacity="0.1" />
                        <line x1="166.81943" y1="9.10799" x2="166.81943" y2="683" fill="none"
                            stroke="#000" stroke-miterlimit="10" stroke-width="2" opacity="0.1" />
                        <line x1="223.81943" y1="6.10799" x2="223.81943" y2="687.15616" fill="none"
                            stroke="#000" stroke-miterlimit="10" stroke-width="2" opacity="0.1" />
                        <line x1="280.81943" y1="3.10799" x2="280.81943" y2="688" fill="none"
                            stroke="#000" stroke-miterlimit="10" stroke-width="2" opacity="0.1" />
                        <ellipse cx="463.21721" cy="95.32341" rx="39.5" ry="37" fill="#2f2e41" />
                        <path d="M683.8586,425.93948l-10,14s-48,10-30,25,44-14,44-14l14-18Z"
                            transform="translate(-335.6414 -100.11607)" fill="#ffb8b8" />
                        <path d="M735.8586,266.93948s-13,0-16,18-6,78-6,78-42,55-35,62,15,20,20,18,48-61,48-61Z"
                            transform="translate(-335.6414 -100.11607)" fill="#7f9cf5" />
                        <path d="M735.8586,266.93948s-13,0-16,18-6,78-6,78-42,55-35,62,15,20,20,18,48-61,48-61Z"
                            transform="translate(-335.6414 -100.11607)" opacity="0.1" />
                        <path d="M775.8586,215.93948s-1,39-13,41-8,15-8,15,39,23,65,0l5-12s-18-13-10-31Z"
                            transform="translate(-335.6414 -100.11607)" fill="#ffb8b8" />
                        <path
                            d="M708.8586,455.93948s-59,110-37,144,55,104,60,104,33-14,31-23-32-76-40-82-4-22-3-23,34-54,34-54-1,84,3,97-1,106,4,110,28,11,32,5,16-97,8-118l15-144Z"
                            transform="translate(-335.6414 -100.11607)" fill="#2f2e41" />
                        <path d="M762.8586,722.93948l-25,46s-36,26-11,30,40-6,40-6l22-16v-46Z"
                            transform="translate(-335.6414 -100.11607)" fill="#2f2e41" />
                        <path
                            d="M728.8586,696.93948l13,31s5,13,0,16-19,21-10,23a29.29979,29.29979,0,0,0,5.49538.5463,55.56592,55.56592,0,0,0,40.39768-16.43936l8.10694-8.10694s-27.77007-63.94827-27.385-63.47414S728.8586,696.93948,728.8586,696.93948Z"
                            transform="translate(-335.6414 -100.11607)" fill="#2f2e41" />
                        <circle cx="465.21721" cy="105.82341" r="34" fill="#ffb8b8" />
                        <path
                            d="M820.3586,253.43948l-10.5,10.5s-32,12-47,0c0,0,5.5-11.5,5.5-10.5s-43.5,7.5-47.5,25.5,3,49,3,49-28,132-17,135,114,28,113,9,8-97,8-97l35-67s-5-22-17-29S820.3586,253.43948,820.3586,253.43948Z"
                            transform="translate(-335.6414 -100.11607)" fill="#7f9cf5" />
                        <path d="M775.8586,448.93948l-13,8s-50,34-24,40,41-24,41-24l10-12Z"
                            transform="translate(-335.6414 -100.11607)" fill="#ffb8b8" />
                        <path
                            d="M849.8586,301.93948l9,9s6,84-6,101-67,63-70,60-22-18-18-20,57.18287-57.56942,57.18287-57.56942l-4.18287-77.43058Z"
                            transform="translate(-335.6414 -100.11607)" opacity="0.1" />
                        <path
                            d="M853.8586,298.93948l9,9s6,84-6,101-67,63-70,60-22-18-18-20,57.18287-57.56942,57.18287-57.56942l-4.18287-77.43058Z"
                            transform="translate(-335.6414 -100.11607)" fill="#7f9cf5" />
                        <path
                            d="M786.797,157.64461s-11.5575-4.20273-27.31774,4.72807l8.40546,2.10136s-12.60819,1.05068-14.18421,17.8616h5.77875s-3.67739,14.70955,0,18.91228l2.364-4.4654,6.82943,13.65887,1.576-6.82944,3.15205,1.05069,2.10137-11.03217s5.25341,7.88012,9.45614,8.40546V195.2065s11.5575,13.13352,15.23489,12.60818l-5.25341-7.35477,7.35477,1.576-3.152-5.25341,18.91228,5.25341-4.20273-5.25341,13.13352,4.20273,6.3041,2.6267s8.9308-20.4883-3.67739-34.67251S798.61712,151.60318,786.797,157.64461Z"
                            transform="translate(-335.6414 -100.11607)" fill="#2f2e41" />
                    </svg>
                </div>
            </div>
        </div>
    </body>

    </html>

    {{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
