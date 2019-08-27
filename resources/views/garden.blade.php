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
    <div class="card shadow-sm" >
        <h1 class="text-center m-2">Directorio de trabajos</h1>
        <div class="card-body">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <h4 class="alert-heading">Como funciona!</h4>
                <p>Te contactas.<i class="em em-calling"></i></p>
                <p>El autor te escribira por WhatsApp y llegas a un acuerdo con él de manera privada. <i class="em em-sunglasses"></i></p>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="card-columns">
                @foreach($trabajos as $trabajo)
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{$trabajo->titulo}}</h5>
                            <p class="card-text">{{$trabajo->descripcion}}</p>
                            <a href="{{route('contact.create',['trabajo' => $trabajo->id])}}" class="btn btn-primary"><i class="fab fa-whatsapp"></i> Contactar</a>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="badge badge-warning">{{$trabajo->materia->nombre}}</a>
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