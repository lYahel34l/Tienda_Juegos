@extends('layouts.plantilla')

@section('contenido')


 <a href="{{route('proveedor.create')}}"> 
  <button type="button" class="btn btn-primary">Agregar Proveedor</button>
 </a>


 <div class="container">
  <div class="row">

    @foreach ($proveedors as $proveedor)
    
    <div class="card">
        
        <div class="card-header">
            Proveedor
        </div>
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <a href="{{route('proveedor.show',$proveedor->id)}}">
            <p>{{$proveedor->nombre}} </p>
            <footer class="blockquote-footer">                    {{$proveedor->contacto}}</footer>
          </blockquote>
        </div>
        </a>
      </div>
    
    
    @endforeach
  </div>
 </div>
    
@endsection()