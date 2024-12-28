<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
$request->validate([
    'name' => 'required|string|max:255',
    'email' => 'required|string|email|max:255',
    'password' => 'required|string|max:255',
]);

   $user = User::create([
    'name' => $request->name,
    'email' => $request->email,
    'password' => Hash::make($request->password),
   ]);
   $user->profile()->create();

   $token = $user->createToken('Vel Token')->plainTextToken;

   return response()->json([
    'user' => $user,
    'token' => $token,
   ]);

    }
}
