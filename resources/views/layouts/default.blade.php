<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Title -->
        @if(isset($title))
            <title>{{ config('app.name').": ".$title }}</title>
        @else
            <title>{{ config('app.name') }}</title>
        @endif

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>

        @yield('styles')

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        <!-- Ionic Icons -->
        <script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    </head>

    <body>

        <!-- Navbar -->
        <header id="app">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        {{ config('app.name') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            @guest
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                </ul>
                                <ul class="navbar-nav d-flex">
                                    @if(Route::has('login'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Connexion') }}</a>
                                        </li>
                                    @endif
                                    @if(Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Inscription') }}</a>
                                        </li>
                                    @endif
                                </ul>
                            @else
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    @if(Route::has('patients.index'))
                                        @can('patients-list')
                                            <li><a class="nav-link" href="{{ route('patients.index') }}">Patients</a></li>
                                        @endcan
                                    @endif
                                </ul>
                                <ul class="navbar-nav d-flex">
                                    <li class="nav-item dropdown dropstart list-style-none">
                                        <button role="button" type="button" class="btn btn-clear-secondary" id="navbarDropdown" data-bs-toggle="dropdown" aria-expanded="false"> 
                                            <ion-icon name="person-circle-outline"></ion-icon> Mon compte
                                        </button>
                                        <ul class="dropdown-menu p-0" aria-labelledby="navbarDropdown">
                                            <li class="p-1">
                                                @if(Route::has('logout'))
                                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                        <ion-icon name="log-out-outline"></ion-icon> 
                                                        Déconnexion
                                                    </a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                        @csrf
                                                    </form>
                                                @endif
                                            </li>
                                            @if(Route::has('admin.index'))
                                                @can('admin-pannel')
                                                    <li><hr class="dropdown-divider m-0"></li>
                                                    <li class="p-1">
                                                        <a class="dropdown-item rounded" href="{{ route('admin.index') }}"><ion-icon name="speedometer-outline"></ion-icon> Dashboard</a>
                                                    </li>
                                                @endcan
                                            @endif
                                        </ul>
                                    </li>
                                </ul>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <!-- Main Content -->
        <div class="container my-5 py-5" id="main_container">
            <div id="main">
                @yield('content')
            </div>
        </div>
        
        <!-- Footer -->
        @yield('scripts')
        <script>
            $('ion-icon')
                .css('display',' inline-block')
                .css('vertical-align',' bottom')
                .css('height',' 1.4em')
                .css('font-size',' 1.1em');
            setInterval(() => {
                $('#main_container').css('min-height', window.innerHeight-50+"px");
            }, 500);
        </script> 

        <!-- Popper and Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <script>
            var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
            var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
                return new bootstrap.Popover(popoverTriggerEl)
            })
        </script>

        <!-- Footer -->
        <footer class="text-center text-lg-start" style="background-color: lightgrey;">
            <div class="text-center text-white p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                Développé 
                    avec <ion-icon name="heart" class="text-danger"></ion-icon> 
                    par <b><a class="text-white" href="http://mathiasdb.fr/">DEOKONAI</a></b>
                        © {{ date('Y') }}
                    Pour <b><a class="text-white" href="https://melisetcom.fr/">Melis&Co'm</a></b>
            </div>
        </footer>

    </body>

</html>
