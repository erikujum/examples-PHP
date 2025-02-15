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
    <div id="app">
        <main class="container">
            <h1> Como instalar Bootstrap en Laravel 10</h1>
            <div class="card">
                <div class="card-header">
                    Icons
                </div>
                <div class="card-body text-center">
                    <i class="bi bi-bag-heart-fill"></i>
                    <i class="bi bi-app"></i>
                    <i class="bi bi-arrow-right-square-fill"></i>
                    <i class="bi bi-bag check-fill"></i>
                    <i class="bi bi-calendar-plus-fill"></i>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
