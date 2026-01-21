<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PerfilController extends Controller
{
   public function showPerfil()
    {
        $user = auth()->user();

        return view('panel', compact('user'));
    }

    public function update(Request $request)
    {
        $user = auth()->user();

        $request->validate([
            'name' => 'required|string|max:255',

            //Esto dice a las base de datos que si es el el correo de este usuario si puede cambiarlo. Para que si solo cambiamos el nombre funcione
            'email' => 'required|email|unique:users,email,' . $user->id,
        ]);

        $user->update($request->all());

        return redirect()->route('panel', $user)->with('info', 'Usuario actualizado con éxito');
    }
}
