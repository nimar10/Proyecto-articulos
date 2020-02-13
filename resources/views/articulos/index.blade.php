@extends('plantillas.plantilla')
@section('titulo')
---->Lista De Articulos<----
 @endsection
  @section('cabecera')
   ---->ARTICULOS<----
    @endsection
     @section('contenido')
      <div class="container">
    <a href="{{route('articulos.create')}}" class="btn btn-success mt-3 mb-2">Crear Articulo</a>
    <form name="search" method="GET" action="{{route('articulos.index')}}" class="form-inline float-right">
      <select name="categoria" class="form-control mr-2" onchange="this.form.submit()">
        <option value='%'>Todos</option>

        @foreach($categorias as $item)
        @if($item==$request->categoria)
        <option selected>{{$item}}</option>
        @else
        <option>{{$item}}</option>
        @endif
        @endforeach
      </select>
              
      <select name="precio" class="form-control mr-2" onchange="this.form.submit()">
      @if(!$request->get('precio'))
        <option value="%" selected>Todos</option>
        <option value="1">Menos de 15</option>
        <option value="2">De 20 a 70</option>
        <option value="3">Más de 100</option>
        @else
        @if($request->get('precio')==1)
        <option value="%">Todos</option>
        <option value="1" selected>Menos de 15</option>
        <option value="2">De 20 a 70</option>
        <option value="3">Más de 100</option>
        @endif
        @if($request->get('precio')==2)
        <option value="%">Todos</option>
        <option value="1" >Menos de 15</option>
        <option value="2" selected>De 20 a 70</option>
        <option value="3">Más de 100</option>
        @endif

        @if($request->get('precio')==3)
        <option value="%">Todos</option>
        <option value="1" >Menos de 15</option>
        <option value="2">De 20 a 70</option>
        <option value="3" selected>Más de 100</option>
        @endif
        @endif
      </select>

    </form>
    <table class="table table-striped table-dark">
      <thead>
        <tr>
          <th scope="col">Codigo</th>
          <th scope="col">Nombre</th>
          <th scope="col">Categoria</th>
          <th scope="col">Precio</th>
          <th scope="col">Stock</th>
          <th scope="col">Imagen</th>

        </tr>
      </thead>
      <tbody>
        @foreach($articulos as $articulo)
        <tr>
          <th scope="row">{{$articulo->id}}</th>
          <td>{{$articulo->nombre}}</td>
          <td>{{$articulo->categoria}}</td>
          <td>{{$articulo->precio}}</td>
          <td>{{$articulo->stock}}</td>
          <td>
            <img src="{{asset($articulo->imagen)}}" height="80px" width="80px" class="rounded-circle">
          </td>

          <td>
            <form name="borrar" action="{{route('articulos.destroy', $articulo)}}" method="POST">
              @csrf
              @method('DELETE')

              <a href="{{route('articulos.edit', $articulo)}}" class="btn btn-warning">Editar Articulo</a>
              <input type="submit" value="Borrar" class="btn btn-danger">
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    {{$articulos->links()}}
    @endsection