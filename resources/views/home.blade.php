@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card shadow-lg">
        <h5 class="card-header">Mis trabajos</h5>
        <div class="card-body">
            <div class="card-columns">
                @foreach($trabajos as $trabajo)
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{$trabajo->titulo}}</h5>
                            <p class="card-text">{{$trabajo->descripcion}}</p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="badge badge-warning">{{$trabajo->materia->nombre}}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection
