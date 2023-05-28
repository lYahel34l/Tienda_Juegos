@extends('layouts.plantilla')

@section('contenido')
<h1>Agregar Un Juguete</h1>

<form action="{{route('juguete.store')}}" method="POST">

    @csrf
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Nombre:</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="{{old('name')}}">
    @error('name')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror
  </div>

  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Marca:</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="marca" value="{{old('marca')}}">
    @error('marca')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror
  </div>

  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Precio:</label>
    <input type="number" class="form-control" id="exampleFormControlInput1" name="precio" value="{{old('precio')}}">
    @error('precio')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror
  </div>

  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Ruta de la Imagen:</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="rutaImagen" value="{{old('rutaImagen')}}">
    @error('rutaImagen')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror
  </div>

  <button type="submit" class="btn btn-success">Agregar</button>

</form>
@endsection