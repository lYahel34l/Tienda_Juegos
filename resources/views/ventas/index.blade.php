@extends('layouts.plantilla')


@section('contenido')

<a href="{{route('ventas.create')}}"> 
    <button type="button" class="btn btn-primary">Agregar ventas</button>
   </a>

@foreach ($clientes as $cliente)
<ul class="list-group list-group-horizontal">
    <li class="list-group-item">{{$cliente->nombre}}</li>
    <li class="list-group-item">{{$cliente->APpaterno}}</li>
    <li class="list-group-item">{{$cliente->APmaterno}}</li>
    
    <div class="container">
        <div class="row">
                @foreach ($cliente->juguetes as $juguete)
                    <li class="list-group-item">{{$juguete->producto}}<br></li>
                    @endforeach
        </div>
        <li class="list-group-item">Total: ${{$cliente->juguetes->sum('precio')}}</li>
    </div>
        
</ul>
@endforeach

    
@endsection