<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>اكاديمية 6 اكتوبر</title>
        <link rel="icon" type="image/png" sizes="192x192" href="{{asset('images/logo.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('images/logo.png')}}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{asset('images/logo.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/logo.png')}}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link href="{{ asset('dashboard/css/custom.css') }}" rel="stylesheet">
        <!-- Styles -->
    </head>
    <body>
        <div class="container-fluid">
            <div class="flex-center position-ref full-height">
                
    
                <div class="content text-center mt-5 pt-5">
                    <div class="title m-b-md">
                        <img src="{{ asset('images/logo.png') }}" alt="6th October Logo" width="100">
                    </div>
                    <h1 class="text-primary font-weight-bold mt-5 display-1">أكاديمية 6 اكتوبر</h1>
                    @if (Route::has('login'))
                        <div class="text-center links">
                            @auth
                            <h3 class="text-center mt-5 font-weight-bold">مرحباً بك يـآ , {{auth()->user()->name}}</h3>
                            <a class="btn btn-danger btn-lg shadow mt-2"  href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"">
                                تسجيل الخروج
                                <i class="la la-sign-out"></i>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            <a class="btn btn-success btn-lg shadow mt-2" href="{{ route('homepage.index') }}">
                                لوحة التحكم
                                <i class="la la-tachometer"></i>
                            </a>
                            @else
                            <a class="btn-lg btn btn-primary shadow ml-3 border-0 text-decoration-none mt-3" href="{{ route('login') }}">تسجيل الدخول</a>
                            @if (count(App\User::all()) == 0)
                                <a class="btn-lg btn btn-success border-0 shadow mt-3 text-decoration-none" href="{{ route('register') }}">حساب جديد</a>
                            @endif
                            @endauth
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </body>
</html>
