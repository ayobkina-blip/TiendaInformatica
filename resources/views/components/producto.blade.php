<a class="ruta-producto" href="{{ route('productos.show', $producto->id) }}">
<div class="producto-card">

    <img class="imagen-producto" src="{{ asset('storage/' . $producto->enlace) }}" alt="">

    <div class="contenedor-producto-vista">

        <h3 class="nombre-producto"> {{$producto->name}}</h3>
        <h3 class="precio-producto">{{$producto->precio}}€</h3>
        

    </div>


</div>
</a>