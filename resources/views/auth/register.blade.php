@extends('auth.layout')
@section('titulo', 'Registrar usuario')
@section('form')
    <form action="{{ route('register.post') }}" method="POST">
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
        
        <input type="text" name="name" id="name" value="{{old('name')}}" placeholder="Nombre completo">
        
        <input type="text" name="email" id="email" value="{{ old('email') }}" placeholder="Correo Electronico*">
        
        <input type="password" name="password" id="password" placeholder="Contraseña*">

        <input type="password" name="password_confirmation" id="password" placeholder="Confirmar contraseña*">

        

        <button type="submit">Registrar</button>
        
        <div class="registro-link">
            ¿Ya tienes una cuenta? <a href="{{ route('login') }}">Iniciar sesion</a>
        </div>
    </form>

@endsection