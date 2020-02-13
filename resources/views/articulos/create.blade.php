@extends('plantillas.plantilla')
@section('titulo')
Creacion de articulos
@endsection

@section('cabecera')
------->CREACION DE ARTICULOS<------- 
@endsection
@section('contenido') 
@if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif

  <form name="crear" action="{{route('articulos.store')}}" method='post' enctype="multipart/form-data">
    @csrf
   
      <div class="col mt-5">
        <input type="text" class="form-control" placeholder="Nombre" name="nombre" required>
      </div>

      <div class="col mt-3">
        <select name='categoria' class="form-control">
          <option selected>Bazar</option>
          <option>Hogar</option>
          <option>Electronica</option>
        </select>

      </div>

      
        <div class="col mt-3">
          <input type="number"   class="form-control" placeholder="precio" name="precio">
        </div>

        <div class="col mt-3">
          <input type="number"  class="form-control" placeholder="stock" name="stock">
        </div>

      
        <div class="float-right mt-2">
          <b>Insertar imagen</b>&nbsp;<input type='file' name='imagen' accept="image/*">
        </div>

        <div class="col mt-5 mr-2" align="center">
            <input type="submit" class="btn btn-info" value="Crear">
            <input type="reset" class="btn btn-warning ml-2" value="Limpiar">
            <a href="{{route('articulos.index')}}" class="btn btn-info ml-2">Volver al inicio</a>
          </div>
      </div>
  </form>
  @endsection