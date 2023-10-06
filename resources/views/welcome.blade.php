@extends('nav') <!-- Extiende el layout principal -->

@section('content') <!-- Llena la sección 'content' del layout con este contenido -->
<br>
<div class="container">
    <div class="row">
        @foreach ($productos as $producto)
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="{{ asset('imagenes/' . $producto->imagen) }}" alt="Imagen de {{ $producto->nombre }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $producto->nombre }}</h5>
                    <p class="card-text">{{ $producto->precio }}</p>
                    <a href="#" class="btn btn-primary">Ver</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
