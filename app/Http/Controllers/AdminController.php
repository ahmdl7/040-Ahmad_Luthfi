<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login(Request $request){
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);
        $credential = $request->only('email', 'password');

        if (Auth::attempt($credential)){

            return redirect()->intended('/admin-gallery');
        }

        return back()->with('error', 'Username atau Password salah!');
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
