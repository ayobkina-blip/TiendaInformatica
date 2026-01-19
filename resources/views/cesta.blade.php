@extends('layout')
@section('titulo', 'Menu principal')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/cesta.css') }}">
@endpush
@section('contenido')
<div class="container-principal">
    <h2 class="titulo">Mi cesta</h2>

    @if($cesta->isEmpty())
        <p class="cestaVacia">Tu cesta está vacía.</p>
    @else
        <table>
            <tbody>
                @foreach($cesta as $item)
                    <tr>
                        <td><img class="imagen-producto" src="{{ asset('storage/' . $item->producto->enlace) }}" alt=""></td>
                        <td>{{ $item->producto->name }}</td>
                        <td>{{ $item->cantidad }}</td>
                        <td>{{ number_format($item->producto->precio, 2) }}€</td>
                        <td style="font-weight: bold;color: #000;">{{ number_format($item->cantidad * $item->producto->precio, 2) }}€</td>
                        
                        <td>
                            <form class="notForm" action="{{ route('cesta.quitar', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"><x-fas-x class="icon-nav icon new" /></button>
                            </form>
                        </td>
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div style="text-align: right; margin-top: 20px;">
            <h3>Total: {{ number_format($cesta->sum(fn($item) => $item->cantidad * $item->producto->precio), 2) }}€</h3>
        </div>
    @endif
</div>
    
@endsection