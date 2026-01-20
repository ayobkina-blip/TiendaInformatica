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

    public function editPerfil(Request $request)
    {
        $user = auth()->user();
        $request->validate([
            'name' => ['required', 'string', 'max:255']
        ]);
        User::edit([
            'name'=>$request->name
        ]);
        return redirect()->intended('/panel');
    }
}
