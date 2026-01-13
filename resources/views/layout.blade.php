<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="{{asset('css/menu.css')}}">
    @stack('styles')
</head>

<body>

    <!-- Encabezado -->

   <header class="main-header">
    <img src="{{ asset('images/logo.png') }}" class="logo-img" alt="Logo">

    <div class="contenedor-principal">
        <form class="buscador-caja">
            <input type="text" class="buscador-input" placeholder="Buscar artículos, marcas...">
            {{-- Icono de lupa --}}
            <button type="submit" class="buscador-boton">
                <x-heroicon-o-magnifying-glass class="icon-sm icon" />
            </button>
        </form>
    </div>

    <ul>
        {{-- Carrito de compra --}}
        <li>
            <a href=" {{-- route('cesta') --}} ">
                <x-heroicon-o-shopping-cart class="icon-nav icon" />
            </a>
        </li>
        {{-- Mi cuenta --}}
        <li>
            <a href="{{-- route('panel') --}}  ">
                <x-heroicon-o-user-circle class="icon-nav icon" />
            </a>
        </li>
        {{-- Cerrar sesión --}}
        <li>
            <a href="{{ route('logout') }}">
                <x-heroicon-o-arrow-right-on-rectangle class="icon-nav text-red icon" />
            </a>
        </li>
    </ul>
</header>
<header class="second-header">

    <ul>
        <li>
            <a href="{{-- route('ordenadores') --}}">
                Ordenadores
            </a>
        </li>
        <li>
            <a href="{{-- route('portatiles') --}}">
                Portatiles
            </a>
        </li>
        <li>
            <a href="{{-- route('monitores') --}}">
                Monitores
            </a>
        </li>
        <li>
            <a href="{{-- route('perifericos') --}}">
                Perifericos
            </a>
        </li>
        <li>
            <a href="{{-- route('componentes') --}}">
                Componenentes
            </a>
        </li>
        <li>
            <a href="{{-- route('accesorios') --}}">
                Accesorios
            </a>
        </li>
    </ul>

</header>
    
    @yield('contenido')  

</body>

</html>