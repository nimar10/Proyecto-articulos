@extends('plantillas.plantilla')
@section('titulo')
Editar Articulos
@endsection

@section('cabecera')
------->EDITAR ARTICULOS<-------
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

  <form name="c" action="{{route('articulos.update', $articulo)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
   
      <div class="col mt-5">
        <input type="text" class="form-control" value="{{$articulo->nombre}}" name="nombre" required>
      </div>

      <div class="col mt-3">
        <select name='categoria' class="form-control">
          @foreach($categorias as $categoria)
          @if($articulo->categoria==$categoria)
          <option selected>{{$categoria}}</option>
          @else
          <option>{{$categoria}}</option>
          @endif
          @endforeach
        </select>
      </div>

      
        <div class="col mt-3">
          <input type="text" class="form-control" value="{{$articulo->precio}}" name="precio" required>
        </div>

        <div class="col mt-3">
          <input type="text" class="form-control" value="{{$articulo->stock}}" name="stock" required>
        </div>

      
        <div class="float-right mt-2">
        <img src="{{asset($articulo->imagen)}}" width="50px" height="50px" class="rounded-circle">
          <b>Insertar imagen</b>&nbsp;<input type='file' name='imagen' accept="image/*">
      </div>

        <div class="col mt-5 mr-2" align="center">
          
            <input type="submit" class="btn btn-info" value="Editar">
            <input type="reset" class="btn btn-warning ml-2" value="Limpiar">
            <a href="{{route('articulos.index')}}" class="btn btn-info ml-2">Volver al inicio</a>
          </div>
      </div>
  </form>
  @endsection