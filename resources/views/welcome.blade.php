@extends('plantillas.plantilla')
@section('titulo')
Chollometro
@endsection

@section('cabecera')
Bienvenido a Chollometro
@endsection
@section('contenido') 
<div class="container text-center mt-5"><img src="{{asset('img/almeria.jpg')}}" width="100%" height="100%"></div>
    <div class="container mt-5 text-center">
        <a href="{{route('articulos.index')}}" class="btn btn-success mr-1">Ir al sitio!!!</a>
    </div>
@endsection