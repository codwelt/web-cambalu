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
    </div>


@endsection
