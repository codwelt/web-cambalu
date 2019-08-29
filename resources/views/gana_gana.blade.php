@extends('layouts.app')

@section('content')

    <div class="container">
        <!-- Your customer chat code -->
        <div class="fb-customerchat"
             attribution=setup_tool
             page_id="106328624076384"
             theme_color="#ffc300"
             logged_in_greeting="Hola, tienes alguna duda de como ganar dinero, jarteras, etc?"
             logged_out_greeting="Hola, tienes alguna duda de como ganar dinero, jarteras, etc?">
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-body">

                        <div class="alert alert-warning " role="alert">
                            <h4 class="alert-heading">Como Ganar Aqui! <i class="em em-moneybag"></i></h4>
                            <p>
                                <b>¿Como Ganas?</b><br>

                                Diciendo que trabajos tienes, trabajos de la universidad hechos por tí que tienes guardados llenos de telarañas. Los trabajos <b>NO</b> los subiras solo diras que trabajos tienes para que aparescan en el directorio y otros estudiantes los y te contacten.<br></br>


                                <b>¿Que Gano?</b><br>

                                Lo que tu pidas(dinero, otro trabajo, comida, una jartera, etc) te pondremos en contacto con las personas que quieren tu trabajo quieren conseguir tu trabajo.<br>

                                <br><b>¿Como comienzo a anunciar?</b><br>
                            <ul>
                                <li><i class="em em-one"></i> Registrándote en la página  |    <a href="{{route("register")}}" ><small>Registrarse ya!</small></a></li>
                                <li><i class="em em-two"></i> Anunciar los trabajos que tienes</li>
                                <li><i class="em em-three"></i> Estar atento a tu whatsApp por que te enviaremos por whatsapp la siguiente información cuando alguien quiera algún trabajo</li>
                            </ul>
                        </div>
                        <!-- Load Facebook SDK for JavaScript -->
                        <div id="fb-root"></div>
                    </div>
                </div>
            </div>
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
    </div>
@endsection
