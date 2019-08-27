@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card shadow-sm" >
        <h1 class="text-center m-2">Lista de trabajos</h1>
        <div class="card-body">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <h4 class="alert-heading">Como funciona!</h4>
                <p>Nos contactas. <i class="em em-calling"></i></p>
                <p>Luego maximo en 24H<i class="em em-clock1030"></i> te ecribimos por WhatsApp y todo sera manejado de manera privada. <i class="em em-sunglasses"></i></p>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
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
@endsection