<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ config('app.name') }}</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('startbootstrap/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('startbootstrap/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="{{asset('startbootstrap/vendor/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('startbootstrap/css/stylish-portfolio.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">

    <style>
        .js-scroll-trigger:hover {
            animation: shake 0.82s cubic-bezier(.36,.07,.19,.97) both;
            transform: translate3d(0, 0, 0);
            backface-visibility: hidden;
            perspective: 1000px;
        }

        @keyframes shake {
            10%, 90% {
                transform: translate3d(-1px, 0, 0);
            }

            20%, 80% {
                transform: translate3d(2px, 0, 0);
            }

            30%, 50%, 70% {
                transform: translate3d(-4px, 0, 0);
            }

            40%, 60% {
                transform: translate3d(4px, 0, 0);
            }
        }
    </style>
</head>

<body id="page-top">
<!-- Header -->
<header class="masthead d-flex">
    <div class="container text-center my-auto">
        <img src="{{asset('img/logo2.png')}}" alt="{{ config('app.name') }}" class="wow bounceIn">
        <h1 class="mb-1 wow bounceIn">{{ config('app.name') }}</h1>
        <h3 class="mb-5 ">
            <em>Comparte o consigue de trabajos Universitarios. </em>
        </h3>
        <a class="btn btn-primary btn-xl js-scroll-trigger"  href="{{route('garden')}}">Explorar</a><br>
        <small class="text-muted">Al navegar por en el portal usted acepta nuestros terminos y condiciones politica y tratamiento de datos.</small>
    </div>
    <div class="overlay">

    </div>
</header>


<!-- Bootstrap core JavaScript -->
<script src="{{asset('startbootstrap/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('startbootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Plugin JavaScript -->
<script src="{{asset('startbootstrap/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for this template -->
<script src="{{asset('startbootstrap/js/stylish-portfolio.min.js')}}"></script>
<script src="{{asset('js/wow.min.js')}}"></script>
<script>
    new WOW().init();
</script>
</body>

</html>
