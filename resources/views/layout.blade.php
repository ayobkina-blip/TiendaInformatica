<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="{{asset('css/menu.css')}}">   
</head>

<body>

    <!-- Encabezado -->

    <header class="main-header">
    
        <img src="{{ asset('images/logo.png') }}" class="logo-img" alt="">

        <div class="contenedor-principal">
            <form class="buscador-caja">
                <input type="text" class="buscador-input" placeholder="Buscar artículos, marcas...">
                <button type="submit" class="buscador-boton">Buscar</button>
            </form>
        </div>

    </header>
    
    @yield('contenido')  

</body>

</html>