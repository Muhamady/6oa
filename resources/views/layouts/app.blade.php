<!DOCTYPE html>
<html dir="rtl" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>اكاديمية 6 اكتوبر</title>
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('images/logo.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('images/logo.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('images/logo.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/logo.png')}}">
    <!-- Fonts -->
    <link href="{{ asset('la/css/line-awesome.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="{{ asset('dashboard/css/custom.css') }}" rel="stylesheet">
    <!-- Styles -->
</head>
<body class="pt-5" style="background: url({{ asset('images/bg.png') }}) no-repeat">
    <div id="app">
        
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
