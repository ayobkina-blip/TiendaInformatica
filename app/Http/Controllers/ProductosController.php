<?php

namespace App\Http\Controllers;

use App\Models\productos;
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

    //Muestra un solo producto
    public function show(productos $productos)
    {
        
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
