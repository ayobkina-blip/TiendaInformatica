@extends('layout')
@section('titulo', 'Panel de control')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/perfil.css') }}">
@endpush


@section('contenido')

<div class="todo">

    <div class="container-panel">

        <ul>
            <li><a href="">Mi perfil</a></li>
        </ul>

    </div>


<div class="container-principal">

    <div class="titulo">Informacion de cuenta</div>
    <div class="container-bienvenida">
        <h3>Te damos la bienvenida a tu cuenta {{ $user->name }}!<x-fileicon-pcd class="iconPerfil"/></h3>
    </div>

    <form class="formPerfil" action="{{ route('user.update') }}" method="POST">
        @csrf
        
        @method('PUT')
            <label for="name">Nombre:</label>
            <input type="text" name="name" id="name" value="{{ $user->name }}">
        
            <label for="email">Correo electronico:</label>
            <input type="text" name="email" id="email" value="{{ $user->email }}">
        
        <button type="submit">Guardar</button>
        
    </form>
    @if ($errors->any() || session('status'))
            <div class="alert-container">
                <ul>
                    @if(session('status'))
                        <li>{{ session('status') }}</li>
                    @endif
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
</div>

</div>


    
@endsection