<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Juguetes</title>
    <link rel="shortcut icon" href="/imagenes/icono.png">
    <link rel="stylesheet" href="librerias/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>


<!--  NAVBAR -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('juguete.index')}}">ToYsK</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('juguete.index')}}">Juguetes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('cliente.index')}}">Clientes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('proveedor.index')}}">Proveedores</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Almacen</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('venta.index')}}">Ventas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('welcome')}}">Integrantes</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!--END NavBar  -->

@yield('contenido')
    
</body>

<script src="librerias/js/bootstrap.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</html>