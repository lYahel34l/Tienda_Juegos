@extends('layouts.plantilla')

@section('contenido')


 <a href="{{route('juguete.create')}}"> agregarjuguetes </a>


 <div class="container">
  <div class="row">

    @foreach ($juguetes as $juguete)
    
    <div class="card" style="width: 18rem;">
      <a href="{{route('juguete.show',$juguete->id)}}">
        <img src="{{$juguete->rutaImagen}}" class="card-img-top" alt="...">
      </a>
      <div class="card-body">
        <a href="{{route('juguete.show',$juguete->id)}}">
          <p class="card-text text-center">{{$juguete->nombre}}</p>
        </a>
      </div>
    </div>
    
    
    @endforeach
  </div>
 </div>
    
@endsection()