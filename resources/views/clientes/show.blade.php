@extends('layouts.plantilla')

@section('contenido')

<div class="card">
    <div class="card-body">
    <strong>Nombre:</strong>  {{$cliente->nombre}}
    </div>
  </div>

  <div class="card">
    <div class="card-body">
        <strong>Apellido Paterno:</strong>  {{$cliente->APpaterno}}
    </div>
  </div>

  <div class="card">
    <div class="card-body">
        <strong>Apellido Materno:</strong>  {{$cliente->APmaterno}}
    </div>
  </div>

  <div class="card">
    <div class="card-body">
        <strong>Direccion:</strong>  {{$cliente->direccion}}
    </div>
  </div>

  <div class="card">
    <div class="card-body">
        <strong>Ciudad:</strong>  {{$cliente->ciudad}}
    </div>
  </div>

  <div class="card">
    <div class="card-body">
        <strong>Telefono:</strong>  {{$cliente->telefono}}
    </div>
  </div>


  <a href="{{route('cliente.edit', $cliente)}}"> 
    <button type="button" class="btn btn-primary">Editar Cliente</button>
   </a>
    <br>
    <br>
   <form action="{{route('cliente.destroy', $cliente)}}" method="POST">
    @csrf
    @method('delete')
        <button type="submit" class="btn btn-danger">Eliminar</button>
   </form>

@endsection()