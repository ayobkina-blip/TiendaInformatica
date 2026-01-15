@extends('layout')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/descripcion-productos.css') }}">
@endpush


@section('contenido')

<div class="contenedor-detalle">

    <div class="producto-detalle-card">
        <img class="imagen-producto" src="{{ asset('storage/' . $producto->enlace) }}" alt="">
        
        <div class="info">
            <h2>{{ $producto->name }}</h2>
            <p class="precio">{{ $producto->precio }}€</p>
            
            <div class="descripcion">
                <h3>Descripción</h3>
                <p>{{$producto->descripcion}}</p>
            </div>

            <div class="descripcion">
                <select name="stock" id="stock">
                    @for ($i = 1; $i <= $producto->stock; $i++)
                        <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
            </div>

            <button id="añadir" class="btn-comprar">Añadir al carrito</button>
        </div>
    </div>
</div>
@endsection