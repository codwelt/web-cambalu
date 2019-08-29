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
                            <small class="text-muted cat">
                                <i class="fas fa-book text-warning"></i> {{$trabajo->materia->nombre}}
                            </small>
                            <p class="card-text">{{$trabajo->descripcion}}</p>

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
</div>

@endsection
