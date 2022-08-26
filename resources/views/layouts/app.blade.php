<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <!--<link href="{ { asset('css/app.css') }}" rel="stylesheet">-->
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container" style="z-index: 100;">
                @guest
                    @if (Route::has('login'))

                    @endif
                @else
                    <input type="checkbox" id="check">
                    <label for="check">
                        <i class="icon ion-md-menu mr-2 lead" id="btn"></i>
                        <i class="icon ion-md-close mr-2 lead" id="cancel"></i>
                    </label>
                    <div class="sidebar" id="sidebar">
                        <header>EasyAccess</header>
                        <a href="{{ route('home') }}">
                            <i class="icon ion-md-apps mr-2 lead"></i>
                            <span>Home</span>
                        </a>
                        <a href="{{ url('/users') }}">
                            <i class="icon ion-md-people mr-2 lead"></i>
                            <span>Users</span>
                        </a>
                        <a href="#">
                            <i class="icon ion-md-stats mr-2 lead"></i>
                            <span>statistics</span>
                        </a>
                        <a href="{{ url('/register') }}">
                            <i class="icon ion-md-person-add mr-2 lead"></i>
                            <span>Register</span>
                        </a>
                        <a href="{{ url('/profile') }}">
                            <i class="icon ion-md-person mr-2 lead"></i>
                            <span>Profile</span>
                        </a>
                    </div>
                @endguest
                <a class="navbar-brand" href="{{ url('/') }}">
                    <span class="fs-5 text-primary fw-bold">{{ config('app.name', 'Laravel') }}</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                {{-- login button --}}
                                <li class="nav-item">
                                    <a class="nav-link me-2 btn btn-primary btn-primary-outline-success text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                {{-- usuario --}}
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesión') }}
                                    </a>
                                    {{-- logout --}}
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    <a class="dropdown-item" href="#">
                                        <span>Notificaciones</span>
                                    </a>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <footer class="container-fluid bg-primary d-flex justify-content-center">
        <p class="text-light mb-0 p-2 fs-6">Easy-Access. &copy; Todos Los Derechos Reservados 2022</p>
    </footer>
    <style>
        .sidebar{
            position: absolute;
            width: 240px;
            left: -240px;
            height: 100%;
            background: #001558;
            transition: all .5s ease;
        }
        .sidebar header{
            font-size: 20px;
            color: white;
            line-height: 70px;
            text-align: center;
            background: #001558;
            user-select: none;
        }
        .sidebar a{
            display: block;
            height: 65px;
            width: 100%;
            color: #007bff;
            background: #001558;
            line-height: 65px;
            padding-left: 30px;
            box-sizing: border-box;
            border-bottom: 1px solid white;
            border-top: 1px solid white;
            border-left: 5px solid transparent;
            transition: all .5s ease;
        }
        .sidebar a.active,a:hover{
            border-left: 5px solid #003cff;
            color: white;
        }
        .sidebar a i{
            font-size: 23px;
            margin-right: 16px;
        }
        #sidebar a span{
            letter-spacing: 1px;
            text-transform: uppercase;
        }
        #check{
            display: none;
        }
        label #btn,label #cancel{
            position: absolute;
            cursor: pointer;
            color: white;
            border-radius: 5px;
            border: 1px solid #001558;
            margin: 1px 1px;
            font-size: 29px;
            background: #001558;
            height: 45px;
            width: 45px;
            text-align: center;
            line-height: 45px;
            margin-left: -6%;
            margin-top: -2%;
            transition: all .5s ease;
        }
        label #cancel{
            opacity: 0;
            visibility: hidden;
        }
        #check:checked ~ .sidebar{
            left: 0;
        }
        #check:checked ~ label #btn{
            margin-left: 160px;
            opacity: 0;
            visibility: hidden;
        }
        #check:checked ~ label #cancel{
            margin-left: 160px;
            opacity: 1;
            visibility: visible;
        }
        @media(max-width : 860px){
            .sidebar{
                height: 100%;
                width: 20%;
                left: -240px;
                margin: 100px 0;
            }
            header,#btn,#cancel{
                display: absolute;
                font-size: 10px;
            }
            .sidebar header{
                font-size: 9px;
                color: white;
                line-height: 70px;
                text-align: center;
                background: #001558;
                user-select: none;
            }
            .sidebar span{
                position: absolute;
                margin-left: 23px;
                opacity: 0;
                visibility: hidden;
            }
            .sidebar a{
                height: 60px;
            }
            .sidebar a i{
                margin-left: -10px;
            }
            .sidebar a:hover {
                width: 200px;
                background: inherit;
            }
            .sidebar a:hover span{
                opacity: 1;
                visibility: visible;
            }
            label #btn,label #cancel{
                margin-left: -2%;
                margin-top: -6%;
            }
            #check:checked ~ .sidebar{
            left: 0;
            }
            #check:checked ~ label #btn{
                margin-left: 18%;
                opacity: 0;
                visibility: hidden;
            }
            #check:checked ~ label #cancel{
                margin-left: 18%;
                opacity: 1;
                visibility: visible;
            }
        }
    </style>
</body>
</html>
