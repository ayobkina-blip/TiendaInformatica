@extends('layout')
@section('titulo', 'Panel de control')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/perfil.css') }}">
@endpush


@section('contenido')

<div class="todo">

    <div class="container-panel">

        <ul>
            <li><a href="{{ route('panel.informacion') }}">Mi perfil</a></li>
            <li><a href="{{ route('panel.pedidos') }}">Mis pedidos</a></li> 

        </ul>
        

    </div>


    @yield('panelContenido')



</div>


    
@endsection