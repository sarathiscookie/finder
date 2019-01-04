<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="{{ asset('storage/img/favicons/mstile-144x144.png') }}">
    <meta name="msapplication-config" content="{{ asset('storage/img/favicons/browserconfig.xml') }}">
    <meta name="theme-color" content="#333333">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Template script -->
    <script src="{{ asset('js/pace.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    {{--<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>--}}

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- START CORE CSS-->
    <link href="{{ asset('css/laraspace.css') }}" rel="stylesheet">

    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('storage/img/favicons/apple-touch-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('storage/img/favicons/apple-touch-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('storage/img/favicons/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('storage/img/favicons/apple-touch-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('storage/img/favicons/apple-touch-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('storage/img/favicons/apple-touch-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('storage/img/favicons/apple-touch-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('storage/img/favicons/apple-touch-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('storage/img/favicons/apple-touch-icon-180x180.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('storage/img/favicons/favicon-32x32.png') }}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ asset('storage/img/favicons/android-chrome-192x192.png') }}" sizes="192x192">
    <link rel="icon" type="image/png" href="{{ asset('storage/img/favicons/favicon-96x96.png') }}" sizes="96x96">
    <link rel="icon" type="image/png" href="{{ asset('storage/img/favicons/favicon-16x16.png') }}" sizes="16x16">
    <link rel="manifest" href="{{ asset('storage/img/favicons/manifest.json') }}">
    <link rel="mask-icon" href="{{ asset('storage/img/favicons/safari-pinned-tab.svg') }}" color="#333333">
    <link rel="shortcut icon" href="{{ asset('storage/img/favicons/favicon.ico') }}">
</head>

<body class="layout-default skin-default">

<div id="app" class="site-wrapper">
    <header class="site-header">
        <a href="#" class="brand-main">
            <img src="{{ asset('storage/img/logo-desk.png') }}" id="logo-desk" alt="Logo" class="hidden-sm-down">
            <img src="{{ asset('storage/img/logo-mobile.png') }}" id="logo-mobile" alt="Logo"
                 class="hidden-md-up">
        </a>
        <a href="#" class="nav-toggle">
            <div class="hamburger hamburger--htla">
                <span>toggle menu</span>
            </div>
        </a>

        <ul class="action-list">
            <li>
                <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                        class="icon-fa icon-fa-plus"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#"><i class="icon-fa icon-fa-edit"></i> New Post</a>
                    <a class="dropdown-item" href="#"><i class="icon-fa icon-fa-tag"></i> New Category</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"><i class="icon-fa icon-fa-star"></i> Separated link</a>
                </div>
            </li>
            <li>
                <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                        class="icon-fa icon-fa-bell"></i></a>
                <div class="dropdown-menu dropdown-menu-right notification-dropdown">
                    <h6 class="dropdown-header">Notifications</h6>
                    <a class="dropdown-item" href="#"><i class="icon-fa icon-fa-user"></i> New User was Registered</a>
                    <a class="dropdown-item" href="#"><i class="icon-fa icon-fa-comment"></i> A Comment has been posted.</a>
                </div>
            </li>
            <li>
                <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="avatar"><img src="{{ asset('storage/img/avatars/avatar.png') }}" alt="Avatar"></a>
                <div class="dropdown-menu dropdown-menu-right notification-dropdown">
                    <a class="dropdown-item" href=""><i class="icon-fa icon-fa-cogs"></i> Settings</a>
                    <a class="dropdown-item" href=""><i class="icon-fa icon-fa-sign-out"></i> Logout</a>
                </div>
            </li>
        </ul>
    </header>
    <div class="mobile-menu-overlay"></div>
    <div class="sidebar-left " id="mobile-nav">
        <div class="sidebar-body scroll-pane">
            <ul class="side-nav metismenu" id="menu">
                <li class="active">
                    <a href="#"><i class="icon-fa icon-fa-dashboard"></i> Dashboard <span
                            class="icon-fa arrow icon-fa-fw"></span> </a>
                    <ul aria-expanded="true" class="collapse">
                        <li class="active">
                            <a href="">Basic</a>
                        </li>
                        <li class="">
                            <a href="">Ecommerce</a>
                        </li>
                        <li class="">
                            <a href="">Finance</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    @yield('content')

    <footer class="site-footer">
        <div class="text-right">
            Powered by <a href="http://bytefury.com/" target="_blank">Finder</a>
        </div>
    </footer>
</div>

<!-- Plugins -->
<script src="{{ asset('js/plugins.js') }}"></script>

</body>

</html>
