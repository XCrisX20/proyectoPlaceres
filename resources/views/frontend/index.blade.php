@extends('frontend.layout')
@section('page-title','Informacion-Mapa')

<style type="text/css">
    .soccer, .jjvv, .abuelitos{
        background: #fff;
        background-size: cover;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        cursor: pointer;
        
    }
    
    .soccer{
        background-image: url("{{asset('img/soccer.png')}}");
    }
    .jjvv{
        background-image: url("{{asset('img/vecinos.png')}}");
    }
    .abuelitos{
        background-image: url("{{asset('img/abuelo.png')}}");
    }
    
</style>


@section('content')

<div class="row mt-3">
    <div class="col-12 col-xl-2 d-flex flex-xl-column justify-content-between">
        <input type="button" class="btn btn-primary" style="height: 100px; width: inherit; margin:2px;" value="Junta de Vecinos">
        <input type="button" class="btn btn-primary" style="height: 100px; width: inherit; margin:2px;" value="Clubes Deportivos">
        <input type="button" class="btn btn-primary" style="height: 100px; width: inherit; margin:2px;" value="Clubes de Adultos">
        <input type="button" class="btn btn-primary" style="height: 100px; width: inherit; margin:2px;" value="Lugares de Interés">
    </div>
    <div class="col-12  col-xl-10">
        <div id='map' style='width: auto; height: 500px;'></div>
    </div>
</div>

@endsection

@push('javascript')

<script>
    mapboxgl.accessToken = 'pk.eyJ1IjoieGNyaXMyMHgiLCJhIjoiY2w2aGdpNjJrMHhhZTNqa2UxNzBhcG90ZiJ9.WdjN22hTm7zWzp0rXOyi9Q';
    var map = new mapboxgl.Map({
        container: 'map',
        center: [-71.59063316357872, -33.04019422447654],
        zoom: 16,
        style: 'mapbox://styles/mapbox/streets-v11'
    });
    
    let deportivo = document.createElement('div');
    deportivo.className = 'soccer';
    
    let jjvv = document.createElement('div');
    jjvv.className = 'jjvv';
    
    let abuelitos = document.createElement('div');
    abuelitos.className = 'abuelitos';

    deportivo.addEventListener('click', ()=>{
        window.alert("HOLIS");
    });

    
    //JJVV
    var marker = new mapboxgl.Marker(jjvv).setLngLat([-71.59274260571728, -33.03582658710754]).addTo(map); // N°47
    //var marker2 = new mapboxgl.Marker(jjvv).setLngLat([-71.59274260571728, -33.03582658710754]).addTo(map); // N°49
    var marker = new mapboxgl.Marker(jjvv).setLngLat([-71.58952526440264, -33.03765606507309]).addTo(map); // N°50
    var marker = new mapboxgl.Marker(jjvv).setLngLat([-71.58341288384742, -33.042608514081834]).addTo(map); // N°87
    var marker = new mapboxgl.Marker(jjvv).setLngLat([-71.58341098541268, -33.042617285877554]).addTo(map); // N°88
    var marker = new mapboxgl.Marker(jjvv).setLngLat([-71.5901455075253, -33.041130767369765]).addTo(map); // N°48
    var marker = new mapboxgl.Marker(jjvv).setLngLat([-71.56773767357244, -33.05234773213105]).addTo(map); // N°86
    //var marker = new mapboxgl.Marker(jjvv).setLngLat([]).addTo(map); // N°89
    var marker = new mapboxgl.Marker(jjvv).setLngLat([-71.58072943154997, -33.04627065024823]).addTo(map); // N°91
    var marker = new mapboxgl.Marker(jjvv).setLngLat([-71.57620961776493, -33.045991269817314]).addTo(map); // N°92
    var marker = new mapboxgl.Marker(jjvv).setLngLat([-71.59263832653424, -33.03989378226351]).addTo(map); // N°93
    //var marker = new mapboxgl.Marker(jjvv).setLngLat([]).addTo(map); // N°93-A
    var marker = new mapboxgl.Marker(jjvv).setLngLat([-71.57527321380569, -33.050172738658304]).addTo(map); // N°148
    
    //Club Adulto Mayor
    var marker = new mapboxgl.Marker(abuelitos).setLngLat([-71.59301229954191, -33.037782501143376]).addTo(map); // Fraternidad
    var marker = new mapboxgl.Marker(abuelitos).setLngLat([-71.5834155388523, -33.04262172927053]).addTo(map); // luciernagas
    var marker = new mapboxgl.Marker(abuelitos).setLngLat([-71.58896076375632, -33.04394782468371]).addTo(map); // La maravillosa edad
    var marker = new mapboxgl.Marker(abuelitos).setLngLat([-71.56780907543714, -33.052181417091845]).addTo(map); // Nueva era
    var marker = new mapboxgl.Marker(abuelitos).setLngLat([-71.57669656966632, -33.04582825105803]).addTo(map); // Villa Berlin
    var marker = new mapboxgl.Marker(abuelitos).setLngLat([-71.57403135362634, -33.04906348731928]).addTo(map); // Las Emprendedoras
    
    //Club Deportivo
    
    var marker = new mapboxgl.Marker(deportivo).setLngLat([-71.56801836009248, -33.05228235080224]).addTo(map); // Juventud Independiente
    var marker = new mapboxgl.Marker(deportivo).setLngLat([-71.56879495986473, -33.05218260349878]).addTo(map); // Progreso
    var marker = new mapboxgl.Marker(deportivo).setLngLat([-71.58338816689981, -33.04666389378136]).addTo(map); // Sincel
    var marker = new mapboxgl.Marker(deportivo).setLngLat([-71.58342041557849, -33.04262226106262]).addTo(map); // Maria Eisler
    //var marker = new mapboxgl.Marker(deportivo).setLngLat([-71.59301229954191, -33.037782501143376]).addTo(map); // Sara Brown
    var marker = new mapboxgl.Marker(deportivo).setLngLat([-71.576961872513, -33.04579442721349]).addTo(map); // Villa Berlin
    var marker = new mapboxgl.Marker(deportivo).setLngLat([-71.59230560886846, -33.03996436377034]).addTo(map); // Los Placeres
    var marker = new mapboxgl.Marker(deportivo).setLngLat([-71.56840429820696, -33.05226276013218]).addTo(map); // Villa Japon
    
    
    
</script>

@endpush