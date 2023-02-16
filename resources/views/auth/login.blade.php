<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Lensys') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
    <!-- Scripts -->
    @vite(['resources/sass/app.scss','resources/js/app.js'])
 
</head>

<body>
<section class="login">
    <div class="container">
        <div class="row">
            <div class="wrapper">
                <div class="col-md-12">
                    <img src="{{ asset('assets/images/logo.png') }}" class="logo">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <select class="form-select form-select-transparent" placeholder="País" id="kt_docs_select2_country">
                            <option value="" data-kt-select2-country="{{ asset('assets/images/ico-home.png') }}">País</option>
                            <option value="AF" data-kt-select2-country="{{ asset('assets/images/flag-pe.png') }}">Nigeria</option>
                            <option value="PE" data-kt-select2-country="{{ asset('assets/images/flag-pe.png') }}">Perú</option>
                        </select>

                        <div class="search">
                                <img src="{{ asset('assets/images/ico-user.png') }}" class="ico-user">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Usuario">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="search">
                                <img src="{{ asset('assets/images/ico-pass.png') }}" class="ico-pass">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraseña">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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
                                <button type="submit" class="btn btn-primary btn-register">
                                    {{ __('INGRESAR') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="lost-pass" href="{{ route('password.request') }}">
                                        {{ __('>> Olvidé mi contraseña <<') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>
</body>

