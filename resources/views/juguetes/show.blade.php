@extends('layouts.plantilla')

@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-2">
            <p><strong>{{$juguete->nombre}}</strong></p>
        </div>
        <div class="col-4">
            <img src='{{$juguete->rutaImagen}}'' class="card-img-top" alt="...">   
        </div>
        <div class="col-6">
            <p><strong>Precio:</strong> <br>  MXN:{{$juguete->precio}}  </p>
        </div>
    </div>
</div>

<a href="{{route('juguete.edit', $juguete)}}"> 
    <button type="button" class="btn btn-primary">Editar Juguete</button>
   </a>

@endsection()