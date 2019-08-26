@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            @foreach($trabajos as $trabajo)
                <div class="col-md-8">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{$trabajo->titulo}}</h5>
                            <p class="card-text">{{$trabajo->descripcion}}</p>
                            <div class="card-footer">
                                <a href="#" class="badge badge-warning">{{$trabajo->materia->nombre}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
