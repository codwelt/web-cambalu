@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @include('flash::message')
                <div class="card">
                    <h5 class="card-header">Soporte</h5>
                    <div class="card-body">
                        <p>
                            Hola, necesitas ayuda en algo. Escribenos para poder ayudarte 😬<i class="em em-face_with_hand_over_mouth" aria-role="presentation" ></i>
                        </p>
                        <form method="post" action="{{route('soporte.store')}}">
                            @csrf
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Mensaje</label>
                                <textarea class="form-control" name="mensaje" id="exampleFormControlTextarea1" rows="3" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Enviar </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">

        $(document).ready(function(){
            $('#modalCrearMateria').on('hidden.bs.modal', function (e) {
                $(this).find("input[name='nombreMateria']").val("");
            });

            $("#btnSubmitMateria").click(function(e){

                var button = $(this);

                var datoEnvio =   $("#modalCrearMateria").find("input[name='nombreMateria']").val();

                //Se desabilita el boton
                button.prop("disabled",true);

                var spinerButton = '<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>';
                button.prepend(spinerButton);

                $.ajax({
                    headers: {
                        Accept: "application/json",
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    'url': "{{route('materias.store')}}",
                    type: 'POST',
                    'data' : 'nombreMateria=' + datoEnvio,
                    success: function(data,textStatus, jqXHR){
                        ///Satisfactorio

                        var alert = '<div class="alert alert-success alert-dismissible fade show" role="alert">\n' +
                            '  <strong>Wooow!</strong> ' +  data.message +
                            '  <button type="button" class="close" data-dismiss="alert" aria-label="Close">\n' +
                            '    <span aria-hidden="true">&times;</span>\n' +
                            '  </button>\n' +
                            '</div>';

                        $("#modalCrearMateria").find(".modal-body").prepend(alert);

                        //Limpia input
                        $("#modalCrearMateria").find("input[name='nombreMateria']").val("");

                    },
                    error: function(jqXHR, textStatus, errorThrown){

                        //Se optiene el testo del response y se parse a json
                        var testResponse = JSON.parse(jqXHR.responseText);

                        //Se añade mensaje de erorr
                        var alert = '<div class="alert alert-danger alert-dismissible fade show" role="alert">\n' +
                            '  <strong>Error!</strong> ' + testResponse.message +
                            '  <button type="button" class="close" data-dismiss="alert" aria-label="Close">\n' +
                            '    <span aria-hidden="true">&times;</span>\n' +
                            '  </button>\n' +
                            '</div>';
                        $("#modalCrearMateria").find(".modal-body").prepend(alert);

                    },
                    complete: function(){

                        //Habilita el boton
                        button.prop("disabled",false);
                        //Elimina el spinner del boton
                        button.find(".spinner-grow").remove();
                    }
                });
            });
        });


    </script>

@endsection
