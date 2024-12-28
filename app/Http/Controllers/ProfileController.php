<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show()
    {
        $profile = Auth::user()->profile;
    
        return response()->json($profile);
    }
    public function update(Request $request)
    {
        $profile = Auth::user()->profile;
        if (!$profile) {
            return response()->json(['error' => 'Profil topilmadi'], 404);
        }
        $profile->update($request->only(['bio', 'image', 'phone']));
        return response()->json($profile);
    }

}
