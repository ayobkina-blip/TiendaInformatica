@extends('auth.layout')
@section('titulo', 'Iniciar Sesion')
@section('form')

    <form action="{{ route('login.post') }}" method="POST">
        @csrf

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
        
        <input type="text" name="email" id="email" value="{{ old('email') }}" placeholder="Correo Electronico*">
        
        <input type="password" name="password" id="password" placeholder="Contraseña*">

        <button type="submit">Iniciar Sesion</button>

        <div class="registro-link">
            ¿No tienes cuenta? <a href="{{ route('registro') }}">Crear cuenta ahora</a>
        </div>
    </form>

@endsection