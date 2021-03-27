<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet">
    <script src="{{ asset('Theme/leaflet/leaflet.js')}}"></script>
    <link rel="stylesheet" href="{{ asset('Theme/leaflet/leaflet.css')}}">
    <link rel="stylesheet" href="{{ asset('Theme/css/styles.css')}}">
    <title>Productos</title>
</head>
<body>
    <header class="menu">
        <div class="menu-items">
        <div class="menu-a">
        <a href="index.html">Inicio</a>
        <a href="productos.html">Crear producto</a>
        <a href="ver-productos.html">Ver productos</a>
        </div>
        </div>
    </header>

    <main class="main-productos">
        <div class="productos">
          <form method="post" class="formulario-productos">
              <input type="text" name="titulo_producto" class="inputs" placeholder="Titulo del producto">
              <input type="text" name="precio_producto" class="inputs" placeholder="Precio del producto">
              <textarea name="descripcion_producto" id="" cols="30" rows="10" placeholder="Descripción..."></textarea>
              <input type="file">
              <button>Crear producto</button>
          </form>
        </div>
    </main>

</body>
</html>