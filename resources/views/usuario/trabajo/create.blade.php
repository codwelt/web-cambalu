@extends('layouts.app')

@section('content')
     <!-- Modal -->
    <div class="modal fade" id="modalCrearMateria" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Crear Materia</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="text" class="form-control" name="nombreMateria" required id="nombreMateria" placeholder="Ingrese el nombre">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" id="btnSubmitMateria" class="btn btn-primary">Crear</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @include('flash::message')
                <div class="card">
                    <h5 class="card-header">Crear</h5>
                    <div class="card-body">
                        <form method="post" action="{{route('trabajo.store')}}">
                            @csrf
                            <div class="form-group">
                                <label for="titulo">Titulo</label>
                                <input type="text" class="form-control" name="titulo" required id="titulo" placeholder="Ingrese el titulo">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Descripcion</label>
                                <textarea class="form-control" name="descripcion" id="exampleFormControlTextarea1" rows="3" required></textarea>
                                <small id="emailHelp" class="form-text text-muted">Una descripcion muy general de lo que contiene el trabajo con palabras clave</small>
                            </div>
                            <div class="form-group">
                                <label for="materiasSelect">Materia</label>
                                <select class="form-control selectpicker"   data-live-search="true"  data-live-search-placeholder="Seleccione la materia"  id="materiasSelect" name="materia" required >
                                    <option></option>
                                    @foreach($materias as $materia)
                                        <option value="{{$materia->id}}">{{$materia->nombre}}</option>
                                    @endforeach
                                    <span class="help-inline">With <code>data-show-subtext="true" data-live-search="true"</code>. Try searching for california</span>
                                </select>
                                <small id="emailHelp" class="form-text text-muted">No esta la materia? <a href="#"  data-toggle="modal" data-target="#modalCrearMateria" class="badge badge-warning">Crear Materia</a></small>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                                    <label class="form-check-label" for="invalidCheck2">
                                        Confirmo que este trabajo esta hecho por mi 💪
                                    </label>
                                </div>
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
