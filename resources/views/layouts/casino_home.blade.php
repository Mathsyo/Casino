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

        <!-- Bootstrap CSS -->
        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> --}}
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        <!-- Ionic Icons -->
        <script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

        <!-- Styles -->
        <style>
            body {
                background-image: url('{{ asset('images/casino_bg.png') }}');
                background-color: #151728 !important;
                background-repeat: no-repeat;
                background-position: top center;
                background-size: cover;
                font-family: 'Nunito', sans-serif;
            }
            /* * {
                color: #ccc8db;
            } */
            .navbar {
                background-color: #212529 !important;
            }
            .navbar-dark .navbar-brand {
                color: lightgrey !important;
            }
            .navbar-dark .navbar-brand:hover {
                color: white;
            }
            @font-face {
                font-family: Casino;
                src: url({{ asset("/fonts/Casino.ttf") }});
            }
            @keyframes text-shadow-rainbow {
                100%,0%{text-shadow: 0 0 40px rgb(255,0,0);}
                8%{text-shadow: 0 0 40px rgb(255,127,0);}
                16%{text-shadow: 0 0 40px rgb(255,255,0);}
                25%{text-shadow: 0 0 40px rgb(127,255,0);}
                33%{text-shadow: 0 0 40px rgb(0,255,0);}
                41%{text-shadow: 0 0 40px rgb(0,255,127);}
                50%{text-shadow: 0 0 40px rgb(0,255,255);}
                58%{text-shadow: 0 0 40px rgb(0,127,255);}
                66%{text-shadow: 0 0 40px rgb(0,50,255);}
                75%{text-shadow: 0 0 40px rgb(175,0,255);}
                83%{text-shadow: 0 0 40px rgb(255,0,255);}
                91%{text-shadow: 0 0 40px rgb(255,0,127);}
            }
            .text-shadow-rainbow {
                animation: text-shadow-rainbow 2.5s infinite;
            }
            @keyframes border-rainbow {
                100%,0%{border-color: rgb(255,0,0);}
                8%{border-color: rgb(255,127,0);}
                16%{border-color: rgb(255,255,0);}
                25%{border-color: rgb(127,255,0);}
                33%{border-color: rgb(0,255,0);}
                41%{border-color: rgb(0,255,127);}
                50%{border-color: rgb(0,255,255);}
                58%{border-color: rgb(0,127,255);}
                66%{border-color: rgb(0,50,255);}
                75%{border-color: rgb(175,0,255);}
                83%{border-color: rgb(255,0,255);}
                91%{border-color: rgb(255,0,127);}
            }
            .border-rainbow {
                border: 1px solid;
                animation: border-rainbow 2.5s infinite;
            }
            @keyframes text-rainbow {
                100%,0%{color: rgb(255,0,0);}
                8%{color: rgb(255,127,0);}
                16%{color: rgb(255,255,0);}
                25%{color: rgb(127,255,0);}
                33%{color: rgb(0,255,0);}
                41%{color: rgb(0,255,127);}
                50%{color: rgb(0,255,255);}
                58%{color: rgb(0,127,255);}
                66%{color: rgb(0,50,255);}
                75%{color: rgb(175,0,255);}
                83%{color: rgb(255,0,255);}
                91%{color: rgb(255,0,127);}
            }
            .text-rainbow {
                animation: text-rainbow 2.5s infinite;
            }
            @keyframes text-underline-rainbow {
                100%,0%{text-decoration-color: rgb(255,0,0);}
                8%{text-decoration-color: rgb(255,127,0);}
                16%{text-decoration-color: rgb(255,255,0);}
                25%{text-decoration-color: rgb(127,255,0);}
                33%{text-decoration-color: rgb(0,255,0);}
                41%{text-decoration-color: rgb(0,255,127);}
                50%{text-decoration-color: rgb(0,255,255);}
                58%{text-decoration-color: rgb(0,127,255);}
                66%{text-decoration-color: rgb(0,50,255);}
                75%{text-decoration-color: rgb(175,0,255);}
                83%{text-decoration-color: rgb(255,0,255);}
                91%{text-decoration-color: rgb(255,0,127);}
            }
            .text-underline-rainbow {
                text-decoration: underline;
                animation: text-underline-rainbow 2.5s infinite;
            }
            
        </style>

        <link href="{{ asset('css/main.css') }}" rel="stylesheet">

        @yield('styles')

    </head>

    <body>

        <!-- Navbar -->
        <header>
            <nav class="navbar navbar-expand-md navbar-dark sticky-top">
                <div class="container">
                    <a class="navbar-brand fs-1 text-shadow-rainbow" href="{{ route('home') }}" style="font-family: Casino">
                        <span class="text-rainbow">Prismatic</span> Casino
                        
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="">Discover our <span class="text-underline-rainbow">rainbow</span> of possibilities!</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <!-- Main Content -->
        <div id="main">
            @yield('content')
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
        {{-- <footer class="text-center text-lg-start" style="background-color: lightgrey;">
            <div class="text-center text-white p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                Développé 
                    avec <ion-icon name="heart" class="text-danger"></ion-icon> 
                    par <b><a class="text-white" href="http://mathiasdb.fr/">DEOKONAI</a></b>
                        © {{ date('Y') }}
                    Pour <b><a class="text-white" href="https://melisetcom.fr/">Melis&Co'm</a></b>
            </div>
        </footer> --}}

    </body>

</html>
