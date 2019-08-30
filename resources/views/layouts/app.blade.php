<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#ffc107" />
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.10/dist/css/bootstrap-select.min.css">


    <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>


    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.10/dist/js/bootstrap-select.min.js"></scr


    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>


   <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-9129043142527500",
            enable_page_level_ads: true
        });
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-146475064-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-146475064-1');
    </script>

    <style>
        /*FOOTER START///////////////////*/
        .footer {
            padding: 50px 0 20px 0;
            background-color: #090c14;
            color: #878c94;
        }

        .footer .title {
            text-align: left;
            color: #fff;
            font-size: 25px;
        }

        .footer .social-icon {
            padding: 0px;
            margin: 0px;
        }

        .footer .social-icon a {
            display: inline-block;
            color: #fff;
            font-size: 25px;
            padding: 5px;
        }

        .footer .acount-icon a {
            display: block;
            color: #fff;
            font-size: 18px;
            padding: 5px;
            text-decoration: none;
        }

        .footer .acount-icon .fa {
            margin-right: 25px;
        }

        .footer .category a {
            text-decoration: none;
            color: #fff;
            display: inline-block;
            padding: 5px 20px;
            margin: 1px;
            border-radius: 4px;
            margin-top: 6px;
            background-color: black;
            border: solid 1px #fff;
        }

        .footer .payment {
            margin: 0px;
            padding: 0px;
            list-style-type: none
        }

        .footer .payment li {
            list-style-type: none
        }

        .footer .payment li a {
            text-decoration: none;
            display: inline-block;
            color: #fff;
            float: left;
            font-size: 25px;
            padding: 10px 10px;
        }
    </style>

</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light  shadow-sm" style="background-color: #ffc107; !important">
        <div class="container">
            <a class="navbar-brand" href="{{\Auth::guest() ? route('garden') : route('home') }}">
                <img src="{{asset('img/logo2.png')}}" width="30" height="30" class="d-inline-block align-top" alt="">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>            </button>



            <div class="collapse navbar-collapse" id="navbarSupportedContent">



                <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                        <li class="nav-item">
                            <a class="nav-link" href="{{\Auth::guest() ? route('garden') : route('home') }}">{{ __('Inicio') }}</a>
                        </li>
                        @auth
                        <li class="nav-item">

                            <a class="nav-link" href="{{ route('trabajo.create') }}"><i class="fas fa-bullhorn"></i> {{ __('Anunciar Trabajo') }} </a>

                        </li>
                        @endauth


                    </ul>

            <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    <div style="min-height: 65vh;">
        <main class="py-4 bg-light">
            @yield('content')
        </main>
    </div>

</div>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="title">Acerca de</h4>
                <p>Cambalú es un portal para anunciar los trabajos universitarios que tu tienes y que otros quieren conseguir para obtener un beneficio(dinero, otro trabajo, una jartera, etc).<i class="em em-i_love_you_hand_sign"></i>
                    Nuestros usuarios son felices por que pueden obtener beneficios de los trabajos de la universidad que alguna vez hicieron pero que ya no usan.
                    Cambalú es un portal de código abierto desarrollada por <span style="color: #009688; text-decoration: underline; " data-toggle="tooltip" data-placement="left" title="Somos Codwelt y somos estudiantes unviesitarios. Desarrollamos Ideas, construimos el futuro. Visitanos en www.codwelt.com">Codwelt</span> bajo la licencia <a
                            href="https://www.gnu.org/licenses/agpl-3.0.html" target="_blank"> AGPLv3.</a></p>
                <ul class="social-icon">
                    <a href="https://www.facebook.com/cambaluuu" class="social"><i
                                class="fab fa-facebook-square"></i></a>
                </ul>
            </div>
            <div class="col-sm-3">
                @guest
                    <h4 class="title">Mi cuenta</h4>
                    <span class="acount-icon">
                    <a href="{{route('login')}}"><i class="fa fa-user" aria-hidden="true"></i>Login</a>
                    <a href="{{ route('register') }}"><i class="fa fa-user" aria-hidden="true"></i>Registrarse</a>
                @endguest
            </span>
            </div>

            <div class="col-sm-3">
                <h4 class="title">Terminos</h4>
                <span class="acount-icon"><a href="{{route('terminos')}}">Terminos y Condiciones</a></span>
                <span class="acount-icon"><a href="{{route('politica')}}">Politica y tratamiento de datos</a></span>

            </div>

            <div class="col-sm-3">

            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <hr style="color: #fff;">
                <a class="text-center" href="https://www.codwelt.com" style="color: #fff;">Copyright © 2019
                        Codwelt.</a>
            </div>

        </div>

    </div>
</footer>
<script>
    //enable overlay alert
    $('#flash-overlay-modal').modal();
    //Enable ppopover
    $('[data-toggle="tooltip"]').tooltip();

    $('.selectpicker').selectpicker();


</script>
</body>
</html>
