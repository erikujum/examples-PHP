<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style type="text/css">
        i{
            font-size: 50px;
        }
    </style>
</head>
<body>
    @extends('app')
    @section('content')
    @if(session('success'))
        <h1>{{session('success')}}</h1>
    @endif
    <div class="container text-center">
        <div class="row vh-100 justify-content-center aling-items-center">
            <main class="form-singnin" style="width: 100%; max-width: 330px; padding: 15px; margin: auto;">
                <form method="POST" action="{{ route('login') }}">
                    <h1 class="h3 mb-3 fw-normal"> Por favor, Inicia session</h1>
                    @csrf
                    <div class="form-floating">
                        <input type="text" placeholder="Email" id="email" class="form-control" name="email" required autofocus>
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email')}}</span>
                        @endif
                        <label for="floatingInput"> Correo electronica</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" placeholder="Password" id="password" class="form-control" name="password" required autofocus>
                        @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password')}}</span>
                        @endif
                        <label for="floatingPassword"> Contraseña</label>
                    </div>
                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" name="remember"> Recuerdame
                        </label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Iniciar session</button>
                    <p class="mt-5 mb-3 text-muted">&copy; 2024</p>
                </form>
            </main>
        </div>
    </div>
</body>
</html>
    
    
    {{-- empieza o termina aqui ?? --}}
    
    <!-- @extends('app')
    @section('content')
    @if(session('success'))
        <h1>{{session('success')}}</h1>
    @endif

    <main class="login-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <h3 class="card-header text-center"> Formulario login </h3>
                        <div class="card-body">
                            <form method="POST" action="{{route('login') }}">
                                @csrf
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Email" id="email" class="form-control" name="email" required autofocus>
                                    @if ($errors->has('email'))
                                    <span class="text-danger"> {{$errors->first('email')}}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                                    @if ($errors->has('password'))
                                    <span class="text-danger">{{$errors->first('password') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Recuerdame
                                        </label>
                                    </div>
                                </div>
                                <div class="d-grid mx-auto">
                                    <button type="submit" class="btn btn-dark btn-block">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @endsection
!-->