<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/coreui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">

</head>
<body class="c-app flex-row align-items-center">


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-group shadow-lg">
                <div class="card p-4">
                    <div class="card-body">
                        <form action="{{ route('login') }}" method="post">
                            @csrf

                            <h1>Вход</h1>
                            <p class="text-muted">Для работы в системе, вам необходимо войти используя ваш логин и пароль</p>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-user"></i>
                                        </span>
                                </div>
                                <input class="form-control" type="email" name="email" value="{{ old('email') }}" placeholder="Логин" required>
                            </div>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-lock"></i>
                                        </span>
                                </div>
                                <input class="form-control" type="password" name="password" placeholder="Пароль" required>
                            </div>
                            <div class="form-group">
                                @if ($errors->has('email'))
                                    <p class="text-center">{{ $errors->first('email') }}</p>
                                @endif

                                @if ($errors->has('password'))
                                    <p class="text-center">{{ $errors->first('password') }}</p>
                                @endif
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <button class="btn btn-dark px-4" type="submit">Войти</button>
                                </div>
                                <div class="col-6 text-right">

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card text-white bg-dark py-5 d-md-down-none" style="width:44%">
                    <div class="card-body text-center">
                        <div class="text-dark">
                            <p>
                                <img src="{{ asset('/img/logo-footer.png') }}" style="width: 180px" alt="SilkWayVentures">
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>


