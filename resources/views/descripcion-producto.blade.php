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

            <form action="{{ route('cesta.añadir', $producto->id) }}" method="POST">
                @csrf
                <div class="descripcion">
                    <label for="cantidad">Cantidad:</label>
                    <select name="cantidad" id="cantidad">
                        @for ($i = 1; $i <= $producto->stock; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
                </div>
                <button id="añadir" class="btn-comprar" type="submit">Añadir a la cesta</button>
            </form>

            

        </form>
        </div>
    </div>
</div>
@endsection