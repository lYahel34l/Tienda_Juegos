@extends('layouts.plantilla')

@section('contenido')
<h1>Editar Un Proveedor</h1>

<form action="{{route('proveedor.update', $proveedor)}}" method="POST">

    @csrf

    @method('PUT')
    
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Nombre:</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="{{old('name',$proveedor->nombre)}}" required>
    
  </div>

  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Contacto:</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="contacto" value="{{old('marca',$proveedor->contacto)}}" required>
  
  </div>

 
  <button type="submit" class="btn btn-success">Actualizar</button>

</form>
@endsection