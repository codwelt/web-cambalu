@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h5 class="card-header">Contactar</h5>
                    <div class="card-body">
                        <form method="post" action="{{route('contact.store')}}">
                            @csrf
                            <div class="form-group">
                                <label for="titulo">Trabajo</label>
                                <input type="text" class="form-control" name="trabajo" disabled value="{{$trabajo->titulo}}" >
                                <input type="hidden" class="form-control" name="id_trabajo" required  value="{{$trabajo->id}}" >
                            </div>
                            <div class="form-group">
                                <label for="titulo">Nombre</label>
                                <input type="text" class="form-control" name="nombre" required id="titulo" placeholder="Ingrese su nombre">
                            </div>
                            <div class="form-group">
                                <label for="titulo">Correo</label>
                                <input type="email" class="form-control" name="correo" required id="titulo" placeholder="Ingrese su correo">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Mensaje</label>
                                <textarea class="form-control" name="mensaje" id="exampleFormControlTextarea1" rows="3"></textarea>
                                <small id="emailHelp" class="form-text text-muted">Quiere hacer alguna pregunta o decir algo antes de contactarlo, este es el momento.</small>
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" requried="required" id="checkTerms">
                                <label class="form-check-label" for="checkTerms">Confirmo los datos son reales</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Enviar </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Load Facebook SDK for JavaScript -->
        <div id="fb-root"></div>
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

        <!-- Your customer chat code -->
        <div class="fb-customerchat"
             attribution=setup_tool
             page_id="106328624076384"
             theme_color="#ffc300"
             logged_in_greeting="Hola, en que trabajo estar interesado?"
             logged_out_greeting="Hola, en que trabajo estar interesado?">
        </div>
    </div>
@endsection
