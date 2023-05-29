@extends('layouts.plantilla')

@section('contenido')
<h1>Editar Un Cliente</h1>

<form action="{{route('cliente.update', $cliente)}}" method="POST">

    @csrf

    @method('PUT')

<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Nombre:</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="{{old('name',$cliente->nombre)}}">
    @error('name')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror
  </div>

  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Apellido Paterno:</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="APpaterno" value="{{old('APpaterno',$cliente->APpaterno)}}">
    @error('APpaterno')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror
  </div>

  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Apellido Materno:</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="APmaterno" value="{{old('APmaterno',$cliente->APmaterno)}}">
    @error('APmaterno')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror
  </div>

  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Direccion:</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="direccion" value="{{old('direccion',$cliente->direccion)}}">
    @error('direccion')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror
  </div>

  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Ciudad:</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="ciudad" value="{{old('ciudad', $cliente->ciudad)}}">
    @error('ciudad')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror
  </div>

  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Telefono:</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="{{old('telefono',$cliente->telefono)}}">
    @error('telefono')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror
  </div>

 

  <button type="submit" class="btn btn-success">Agregar</button>

</form>
@endsection