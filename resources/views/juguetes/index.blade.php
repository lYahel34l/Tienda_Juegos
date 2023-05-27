@extends('layouts.plantilla')

@section('contenido')
 <a href=""> agregarjuguetes </a>

    @foreach ($juguetes as $juguete)
   
    <div class="card" style="width: 18rem;">
        <a href="">
        <img src="{{$juguete->rutaImagen}}" class="card-img-top" alt="...">
        </a>
        <div class="card-body">
            <a href="">
          <p class="card-text">{{$juguete->nombre}}</p>
            </a>
        </div>
      </div>

    

    @endforeach

@endsection()