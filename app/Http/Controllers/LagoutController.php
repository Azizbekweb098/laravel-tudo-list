<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class LagoutController extends Controller
{
   

    public function lagout()
    {
        Auth::logout();
        return redirect('/');  // Logoutdan so'ng asosiy sahifaga yo'naltirish
    }
    
}