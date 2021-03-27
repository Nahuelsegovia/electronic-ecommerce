<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet">
    <script src="{{ asset('Theme/leaflet/leaflet.js')}}"></script>
    <link rel="stylesheet" href="{{ asset('Theme/leaflet/leaflet.css')}}">
    <link rel="stylesheet" href="{{ asset('Theme/css/styles.css')}}">
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

    <div class="container">
        <h2>Productos publicados</h2>
        <div class="table-wrapper">
            <table class="fl-table">
                <thead>
                <tr>
                    <th>Titulo producto</th>
                    <th>Precio producto</th>
                    <th>Acción</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td>Aspiradora admiral</td>
                    <td>$5.000</td>
                    <td>
                        <div>
                            <button style="height: 40px;">Eliminar</button>
                        </div>
                    </td>
                </tr>
                
                <tbody>

            </table>
        </div>
      </div>
</body>
</html>