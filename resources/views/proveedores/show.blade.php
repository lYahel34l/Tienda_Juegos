@extends('layouts.plantilla')

@section('contenido')

<div class="card">
    <div class="card-body">
    <strong>Nombre:</strong>  {{$proveedor->nombre}}
    </div>
  </div>

  <div class="card">
    <div class="card-body">
        <strong>Contacto:</strong>  {{$proveedor->contacto}}
    </div>
  </div>

  

  <a href="{{route('proveedor.edit', $proveedor)}}"> 
    <button type="button" class="btn btn-primary">Editar Proveedor</button>
   </a>
    <br>
    <br>
   <form action="{{route('proveedor.destroy', $proveedor)}}" method="POST">
    @csrf
    @method('delete')
        <button type="submit" class="btn btn-danger">Eliminar</button>
   </form>

@endsection()