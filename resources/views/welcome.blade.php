<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Inicio</title>
</head>
<body>
    
    <div class="row">
        <div class="col-3">
            <img src="{{ asset('img/logo_2.jpeg') }}" alt="image-not-found" width="150">
        </div>
        <div class="col-7 mt-5">
            <div id='map' style='width: 400px; height: 300px;'></div>
        </div>
        
        <div class="col-2">
            <input type="button" class="btn btn-danger" value="Cerrar Sesion">
        </div>
    </div>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <script src='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.css' rel='stylesheet' />

<script>
    mapboxgl.accessToken = 'pk.eyJ1IjoieGNyaXMyMHgiLCJhIjoiY2w2aGdpNjJrMHhhZTNqa2UxNzBhcG90ZiJ9.WdjN22hTm7zWzp0rXOyi9Q';
    var map = new mapboxgl.Map({
      container: 'map',
      center: [-71.469734, -33.043348],
      zoom: 13,
      style: 'mapbox://styles/mapbox/streets-v11'
    });
</script>


</body>
</html>