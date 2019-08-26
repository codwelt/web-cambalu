@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h5 class="card-header">Crear</h5>
                    <div class="card-body">
                        <form method="post" action="{{route('trabajo.store')}}">
                            @csrf
                            <div class="form-group">
                                <label for="titulo">Titulo</label>
                                <input type="email" class="form-control" name="titulo" required id="titulo" placeholder="Ingrese el titulo">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Descripcion</label>
                                <textarea class="form-control" name="descripcion" id="exampleFormControlTextarea1" rows="3" required></textarea>
                                <small id="emailHelp" class="form-text text-muted">Una descripcion muy general de lo que contiene el trabajo con palabras clave</small>
                            </div>
                            <div class="form-group">
                                <label for="materiasSelect">Materia</label>
                                <select class="form-control" id="materiasSelect" name="materia" required>
                                    <option></option>
                                    @foreach($materias as $materia)
                                        <option value="{{$materia->id}}">{{$materia->nombre}}</option>
                                    @endforeach
                                </select>
                                <small id="emailHelp" class="form-text text-muted">No esta la materia? <a href="#" class="badge badge-info">Crear Materia</a></small>
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" requried id="checkTerms">
                                <label class="form-check-label" for="checkTerms">Confirmo que este trabajo esta hecho por mi 💪</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
