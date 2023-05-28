@extends('layouts.plantilla')

@section('contenido')
<h1>Editar Un Juguete</h1>

<form action="{{route('juguete.update', $juguete)}}" method="POST">

    @csrf

    @method('PUT')
    
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Nombre:</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="{{$juguete->nombre}}">
  </div>

  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Marca:</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="marca" value="{{$juguete->marca}}">
  </div>

  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Precio:</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="precio" value="{{$juguete->precio}}">
  </div>

  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">ruta Imagen:</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="rutaImagen" value="{{$juguete->rutaImagen}}">
  </div>

  <button type="submit" class="btn btn-success">Actualizar</button>

</form>
@endsection