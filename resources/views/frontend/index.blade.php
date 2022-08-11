@extends('frontend.layout')
@section('page-title','Informacion-Mapa')

@section('content')

    <div class="row mt-3">
        <div class="col-2">
            <input type="button" class="btn btn-primary mb-3" style="width: 250px;" value="Junta de Vecinos"><br>
            <input type="button" class="btn btn-primary mb-3" style="width: 250px;" value="Clubes Deportivos"><br>
            <input type="button" class="btn btn-primary mb-3" style="width: 250px;" value="Clubes de Adultos"><br>
            <input type="button" class="btn btn-primary mb-3" style="width: 250px;" value="Lugares de Interés"><br>
        </div>
        <div class="col-10">
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
</script>

@endpush