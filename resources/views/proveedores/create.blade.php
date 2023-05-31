@extends('layouts.plantilla')

@section('contenido')
<h1>Agregar Un Proveedor</h1>

<form action="{{route('proveedor.store')}}" method="POST">

    @csrf
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Nombre:</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="{{old('name')}}" required>
    @error('name')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror
  </div>

  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Contacto:</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="contacto" value="{{old('contacto')}}" required>
    @error('contacto')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror
  </div>

  

  <button type="submit" class="btn btn-success">Agregar</button>

</form>
@endsection