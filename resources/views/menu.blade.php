@extends('layout')
@section('titulo', 'Menu principal')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/productos.css') }}">
@endpush


@section('contenido')
    <div class="productos-container">
        @if ($productos->isEmpty())
            
            <p>No hay productos</p>
            
        @else

        @foreach($productos as $item)
            @component('components.producto', ['producto' => $item])
            @endcomponent
        @endforeach
        @endif
    </div>
@endsection