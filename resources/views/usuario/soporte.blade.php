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
                            Hola, necesitas ayuda en algo. Escribenos para poder ayudarte😬<i class="em em-face_with_hand_over_mouth" aria-role="presentation" ></i>
                        </p>
                        <form method="post" action="{{route('soporte.store')}}">
                            @csrf
                            <div class="form-group">
                                <textarea class="form-control" name="mensaje" id="exampleFormControlTextarea1" rows="3" required></textarea>
                                <small id="emailHelp" class="form-text text-muted">Descripcion del problema</small>
                            </div>
                            <button type="submit" class="btn btn-primary">Enviar </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
