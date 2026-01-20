@extends('layout')
@section('titulo', 'Panel de control')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/perfil.css') }}">
@endpush


@section('contenido')
<div class="container-principal">

    <div class="titulo">Informacion de cuenta</div>
    <div class="container-bienvenida">
        <h3>Te damos la bienvenida a tu cuenta {{ $user->name }}!<x-fileicon-pcd class="iconPerfil"/></h3>
    </div>

    <form class="formPerfil" action="" method="post">
        <div class="contenido">
            <label for="name">Nombre:</label>
            <input type="name" id="name" placeholder="{{ $user->name }}">
        </div>
        <div class="contenido">
            <label for="email">Correo electronico:</label>
            <input type="email" id="email" placeholder="{{ $user->email }}">
        </div>
        <button type="submit">Guardar</button>
    </form>
</div>
    
@endsection