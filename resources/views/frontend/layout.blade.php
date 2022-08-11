<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }} - @yield('page-title','Gestor')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    {{-- Sin usar --}}
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"> --}}
</head>
<style>
    .navbar{
        margin: 0;
        padding: 0;
    }
</style>
<body class="{{ str_replace('.',' ',request()->route()->getName()) }}">
    <header class="site-header">
        <nav class="navbar site-navbar navbar-dark navbar-expand-lg">
            <div class="container-fluid bg-light">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{asset('img/logo_2.jpeg')}}" alt="{{ config('app.name') }}" width="100">
                </a>
                <a href="{{url('/login')}}" class="btn btn-success">Ingresar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#site-navbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
            </div>
        </nav>
        @yield('header-content')
    </header>

    <main class="site-main">
        <div class="container-fluid">
            @yield('content')            
        </div>
    </main>
    
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-5">
                    <a href="#" class="d-block mt-2 mb-3" data-aos="fade-right">
                        {{-- <img src="{{ asset('img/logo_2.jpeg') }}" alt="{{ config('app.name') }}"> --}}
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.css' rel='stylesheet' />
    @stack('javascript')
</body>
</html>