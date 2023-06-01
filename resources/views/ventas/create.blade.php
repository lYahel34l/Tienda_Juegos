@extends('layouts.plantilla')

@section('contenido')

<form action="{{ route('ventas.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="cliente">Cliente:</label>
        <select name="cliente_id" class="form-control">
            @foreach ($clientes as $cliente)
                <option value="{{ $cliente->id }}">{{ $cliente->nombre }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="juguete">Juguete:</label>
        <select name="juguete_id" class="form-control">
            @foreach ($juguetes as $juguete)
                <option value="{{ $juguete->id }}"> {{ $juguete->producto }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Crear Venta</button>
</form>

@endsection
