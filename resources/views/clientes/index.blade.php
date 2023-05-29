@extends('layouts.plantilla')

@section('contenido')


 <a href="{{route('cliente.create')}}"> 
  <button type="button" class="btn btn-primary">Agregar Cliente</button>
 </a>


 <div class="container">
  <div class="row">

    @foreach ($clientes as $cliente)
    
    <div class="card">
        
        <div class="card-header">
          Cliente
        </div>
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <a href="{{route('cliente.show',$cliente->id)}}">
            <p>{{$cliente->nombre}} {{$cliente->APpaterno}}  {{$cliente->APmaterno}}</p>
            <footer class="blockquote-footer">{{$cliente->telefono}}</footer>
          </blockquote>
        </div>
        </a>
      </div>
    
    
    @endforeach
  </div>
 </div>
    
@endsection()