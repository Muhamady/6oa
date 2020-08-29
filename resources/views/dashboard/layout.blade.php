<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v3.2.0
* @link https://coreui.io
* Copyright (c) 2020 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->
<html lang="en" dir="rtl">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>أكاديمية 6 اكتوبر</title>
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('images/logo.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('images/logo.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('images/logo.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('images/logo.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('images/logo.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('images/logo.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('images/logo.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('images/logo.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('images/logo.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('images/logo.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('images/logo.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('images/logo.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/logo.png')}}">
    <link rel="manifest" href="{{asset('images/logo.png')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{asset('assets/favicon/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ffffff">
    <link href="{{ asset('la/css/line-awesome.min.css') }}" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="{{ asset('dashboard/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/css/custom.css') }}" rel="stylesheet">
  </head>
  <body class="c-app">
    <div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
      <div class="c-sidebar-brand d-lg-down-none">
        <img class="c-sidebar-brand-full" src="{{ asset('images/logo.png') }}" alt="6oa Logo" width="50" style="float-left"> 
        <h4 class="mr-3">أكاديمية 6 اكتوبر</h4>
        <img class="c-sidebar-brand-full c-sidebar-brand-minimized" src="{{ asset('images/logo.png') }}" alt="6oa Logo" width="50" style="float-left">
      </div>
      <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item">
          <a class="c-sidebar-nav-link" href="{{ route('homepage.index') }}">
            <i class="la la-tachometer c-sidebar-nav-icon la-3x"></i>
              الصفحة الرئيسية
          </a>
        </li>

        <li class="c-sidebar-nav-item">
          <a class="c-sidebar-nav-link" href="{{ route('settings.index') }}">
            <i class="la la-tachometer c-sidebar-nav-icon la-3x"></i>
              الإعدادات
          </a>
        </li>


        <li class="c-sidebar-nav-item">
          <a class="c-sidebar-nav-link" href="{{ route('banners.index') }}">
            <i class="la la-image c-sidebar-nav-icon la-3x"></i>
              إعلانات
          </a>
        </li>


        <li class="c-sidebar-nav-item">
          <a class="c-sidebar-nav-link" href="{{ route('academy_numbers.index') }}">
            <i class="la la-graduation-cap c-sidebar-nav-icon la-3x"></i>
              الأكاديمية في أرقام
          </a>
        </li>


        <li class="c-sidebar-nav-item">
          <a class="c-sidebar-nav-link" href="{{ route('sections.index') }}">
            <i class="la la-list c-sidebar-nav-icon la-3x"></i>
              أقسام الأكاديمية
          </a>
        </li>

        
        {{-- <li class="c-sidebar-nav-title">ميديا الأكاديمية</li> --}}


        <li class="c-sidebar-nav-item">
          <a class="c-sidebar-nav-link" href="{{ route('media.index') }}">
            <i class="la la-image c-sidebar-nav-icon la-3x"></i>
              ميديا الأكاديمية
          </a>
        </li>

        <li class="c-sidebar-nav-item">
          <a class="c-sidebar-nav-link" href="{{ route('vision.index') }}">
            <i class="la la-eye c-sidebar-nav-icon la-3x"></i>
              رؤية الأكاديمية
          </a>
        </li>


        <li class="c-sidebar-nav-item">
          <a class="c-sidebar-nav-link" href="{{ route('faq.index') }}">
            <i class="la la-question c-sidebar-nav-icon la-3x"></i>
            الأسئلة المتكررة
          </a>
        </li>


        <li class="c-sidebar-nav-item">
          <a class="c-sidebar-nav-link" href="{{ route('applicants.index') }}">
            <i class="la la-users c-sidebar-nav-icon la-3x"></i>
            التقديم والقبول
          </a>
        </li>

        <li class="c-sidebar-nav-item">
          <a class="c-sidebar-nav-link" href="{{ route('partners.index') }}">
            <i class="la la-users c-sidebar-nav-icon la-3x"></i>
            الشركاء
          </a>
        </li>

        <li class="c-sidebar-nav-item">
          <a class="c-sidebar-nav-link" href="{{ route('branchs.index') }}">
            <i class="la la-users c-sidebar-nav-icon la-3x"></i>
            الفروع
          </a>
        </li>

      </ul>
      <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized">

      </button>
    </div>
    <div class="c-wrapper c-fixed-components">
      <header class="c-header c-header-light c-header-fixed c-header-with-subheader">
        <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar" data-class="c-sidebar-show">
          <i class="la la-list"></i>
        </button><a class="c-header-brand d-lg-none" href="#">
        <img class="c-sidebar-brand-full c-sidebar-brand-minimized" src="{{ asset('images/logo.png') }}" alt="6oa Logo" width="50" style="float-left">
        <button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar" data-class="c-sidebar-lg-show" responsive="true">
            <i class="la la-list la-2x"></i>
        </button>
        <ul class="c-header-nav d-md-down-none">
          <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">لوحة التحكم</a></li>
          <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">المستخدمين</a></li>
          <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">الإعدادات</a></li>
        </ul>
        <ul class="c-header-nav ml-auto mr-4">
            <li class="c-header-nav-item dropdown">
                <a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <div class="c-avatar">
                        <img class="c-avatar-img" src="{{ asset('images/user.png') }}" alt="user@email.com">
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right mb-0 pb-0 pt-0">
                    <a class="dropdown-item" href="#">
                        <i class="la la-user ml-3"></i> الصفحة الشخصية
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="la la-sign-out ml-3"></i> تسجيل الخروج
                    </a>
                </div>
            </li>
        </ul>
        <div class="c-subheader px-3">
            <!-- Breadcrumb-->
            <ol class="breadcrumb border-0 m-0">
                <li class="breadcrumb-item">لوحة التحكم</li>
                <li class="breadcrumb-item active">الرئيسية</li>
                <!-- Breadcrumb Menu-->
            </ol>
        </div>
      </header>
      <div class="c-body">
        <main class="c-main">
            @yield('content')
        </main>
        <footer class="c-footer">
          <div><a href="http://6oa.com">اكاديمية 6 اكتوبر</a> © 2020 .</div>
          <div class="ml-auto">تم بواسطة&nbsp;<a href="https://coreui.io/">اكاديمية 6 اكتوبر</a></div>
        </footer>
      </div>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="{{asset('dashboard/vendors/@coreui/coreui/js/coreui.bundle.min.js')}}"></script>
    @yield('scripts')
  </body>
</html>