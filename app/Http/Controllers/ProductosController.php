<?php

namespace App\Http\Controllers;

use App\Models\productos;
use App\Models\User;
use App\Models\Cesta;
use App\Models\Categorias;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    
    //Mostrar lista de todos los productos
    public function index()
    {
        $productos = productos::all();

        return view('menu', ['productos'=> $productos]);
        
    }

    //Crea y valida el registro de producto (FALTA TERMINAR)
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'descripcion' => 'nullable',
        ]);
        $productos = productos::create($validated);
        return response()->json($productos, 201);
    }

   // Muestra un solo producto

    public function show(productos $producto)
    {
        return view('descripcion-producto', compact('producto'));
    }

    public function añadir(Request $request, productos $producto)
    {
        $id = auth()->id();
        
        $cantidad = $request->input('cantidad');

        if (!$cantidad) {
            return redirect()->back()->with('error');
        }

        Cesta::create([
            'usuario_id' => $id,
            'producto_id' => $producto->id,
            'cantidad' => $cantidad
        ]);

        return redirect()->back()->with('mensaje', 'Producto añadido a la cesta');
    }

    public function quitar(Cesta $cesta)
    {
        
        $cesta->delete();
        
        return back()->with('success', 'Producto quitado de la cesta.');
        
    }

    public function indexCategorizado($categoriaDada)
    {
        $productos = productos::where('categoria_id', $categoriaDada)->get();

        return view('menu', [
            'productos' => $productos
        ]);
    }

    public function showCesta()
    {
        $userId = auth()->id();

        $cesta = Cesta::where('usuario_id', $userId)->with('producto')->get();

        return view('cesta', compact('cesta'));
    }

    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(productos $productos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, productos $productos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(productos $productos)
    {
        //
    }
}
