@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Your customer chat code -->
    <div class="fb-customerchat"
         attribution=setup_tool
         page_id="106328624076384"
         theme_color="#ffc300"
         logged_in_greeting="Hola, te puedo ayudar en algo?"
         logged_out_greeting="Hola, te puedo ayudar en algo?">
    </div>
    <div class="alert alert-warning alert-dismissible fade show animated infinite bounce delay-2s" role="alert" id="alertGanaGana">
        <h4 class="alert-heading">Como Ganar Aqui! <i class="em em-moneybag"></i></h4>
        <p>
            <b>¿Como Ganas?</b><br>

            Anunciado los trabajos de la universidad hechos por ti.<br><br>

            <b>¿Que Gano?</b><br>

            Lo que tu pidas(dinero, otro trabajo, comida, una jartera, etc) ya que realmente tu le vas a hablar a la persona que quiere conseguir tu trabajo.<br>

            <br><b>¿Como comienzo a anunciar?</b><br>
            <ul>
            <li><i class="em em-one"></i> Registrándote en la página  |    <a href="{{route("register")}}" ><small>Registrarse ya!</small></a></li>
            <li><i class="em em-two"></i> Anunciar los trabajos que tienes</li>
            <li><i class="em em-three"></i> Estar atento a tu whatsApp por que te enviaremos por whatsapp la siguiente información cuando alguien quiera algún trabajo</li>


        </ul>





            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
    </div>

    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <h4 class="alert-heading">Como consigues el trabajo que necesitas!</h4>
        <p>Te contactas.<i class="em em-calling"></i></p>
        <p>El autor te escribira por WhatsApp y llegas a un acuerdo con él de manera privada para obtener el trabajo. <i class="em em-sunglasses"></i></p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="card shadow-sm" >
        <h1 class="text-center m-2">Directorio de trabajos</h1>
        <div class="card-body">
            @include('flash::message')
            <div class="card-columns">
                @foreach($trabajos as $trabajo)
                    <div class="card">
                        <div class="card-body">

                            <h5 class="card-title">{{$trabajo->titulo}}</h5>
                            <small class="text-muted cat">
                                <i class="fas fa-book text-warning"></i> {{$trabajo->materia->nombre}}
                            </small>
                            <p class="card-text">{{$trabajo->descripcion}}</p>
                            <a href="{{route('contact.create',['trabajo' => $trabajo])}}" class="btn btn-warning"><i class="fab fa-whatsapp"></i> Contactar</a>

                        </div>
                        <div class="card-footer text-muted d-flex justify-content-between bg-transparent border-top-0">
                            <div class="views">ID: {{$trabajo->getIdCrypt()}}
                            </div>
                            <div class="stats">
                                <i class="far fa-eye "></i> {{rand(0,500)}}
                                <i class="fab fa-whatsapp"></i> {{rand(0,15)}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
</div>
<script>

    $("#alertGanaGana").click(function(){
        $(this).removeClass("animated");
    });


    window.fbAsyncInit = function() {
        FB.init({
            xfbml            : true,
            version          : 'v4.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
@endsection
