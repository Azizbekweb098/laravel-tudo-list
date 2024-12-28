<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|max:255',
            'password' => 'required|string|',
        ]);
        if(!Auth::attempt($request->only('email', 'password'))){
            return response()->json(['xat' => 'xatolik '], 401);
        }

        $user = Auth::user();
        $token = $user->createToken('Vel token')->plainTextToken;

        return response()->json([

            'token' => $token,
        ]);

    }
}
