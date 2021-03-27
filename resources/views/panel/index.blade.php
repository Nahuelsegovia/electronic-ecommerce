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
    <title>Panel</title>
</head>
<body>

    <header class="menu">
        <div class="menu-items">

        <div class="menu-a">
        <a href="index.html">Inicio</a>
        <a href="">Usuarios</a>
        <a href="productos.html">Productos</a>
        </div>

        </div>
    </header>

    <main class="content">

        <div id="mapid"></div>

        <div class="electronic-task" id="pintar">
            
        </div>

    </main>

    <footer>
        Footer del panel
    </footer>
</body>
<script>
    let pintar = document.getElementById('pintar');
    let pedidos = [
        {'titulo_plato': 'Comidita rapidita', 'imagen_plato': 'pedido.png', 'lat': -34.59807, 'lon': -58.4586582},
        {'titulo_plato': 'Comidita rapidita 2', 'imagen_plato': 'pedido.png', 'lat': -34.9205233, 'lon': -57.9881898}
    ];


    var mymap = L.map('mapid').setView([-36.6769415180527, -60.5588319815719], 6);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
			attribution: 'Map data © <a href=´https://openstreetmap.org´>OpenStreetMap</a> contributors',
		    	maxZoom: 16,
	    }).addTo(mymap);
    

    for(let pedido of pedidos){
        var marker = L.marker([pedido.lat, pedido.lon]).addTo(mymap);
        marker.addEventListener('click', () => {
            pintar.innerHTML = `<div class="task">
                <p>${pedido.titulo_plato}</p>
                <img src="${pedido.imagen_plato}" style="width: 230px;"alt="Imagen del pedido">
                <button>Despachar pedido</button>
            </div>`
        });
    }

    
</script>
</html>