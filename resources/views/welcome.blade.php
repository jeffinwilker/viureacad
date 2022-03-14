<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('Viure Academy', 'Viure Academy') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!--CSS-->
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link href="css/home.css" rel="stylesheet" type="text/css">
    <style type="text/css">
        @font-face {
            font-family: FPRODISPLAYMEDIUM;
            src: url('{{ public_path('font/SFPRODISPLAYMEDIUM.OTF') }}');
        }
    </style>
    

</head>

<body>
                    <div class="card-header">{{ __('Login') }}</div>
                        <form class="form" method="POST" action="{{ route('login') }}">
                            @csrf

                            <div>
                                <label class="labeln" id=lemail for="email">{{ __('E-mail') }}</label>
                                <div id="inemail">
                                    <input placeholder="E-mail" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <label class="labeln" id="lsenha" for="password">{{ __('Senha') }}</label>

                                <div>
                                    <input placeholder="Senha" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div>
                                <div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Lembrar de mim') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div>
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Entrar') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Esqueceu a senha?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>