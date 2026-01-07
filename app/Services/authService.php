<?php
namespace App\Services;

use Illuminate\Support\Facades\Auth;

class AuthService {
    public function login($credentials) {
        return Auth::attempt($credentials);
    }
}