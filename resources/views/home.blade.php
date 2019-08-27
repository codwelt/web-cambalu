@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h5 class="card-header">Mis trabajos</h5>
                <div class="card-body">
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
        </div>
    </div>
</div>

@endsection
