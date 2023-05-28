@extends('layouts.plantilla')

@section('contenido')
<h1>Agregar Un Juguete</h1>

<form action="{{route('juguete.store')}}" method="POST">

    @csrf
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Nombre:</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="name">
  </div>

  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Marca:</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="marca">
  </div>

  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Precio:</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="precio">
  </div>

  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">ruta Imagen:</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="rutaImagen">
  </div>

  <button type="submit" class="btn btn-success">Agregar</button>

</form>
@endsection