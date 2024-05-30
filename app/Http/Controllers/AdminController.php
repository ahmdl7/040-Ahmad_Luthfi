<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login(Request $request){
        //validasi form login
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        // menyimpan data inputan dari login
        $credential = $request->only('email', 'password');

        // mengautentikasi data inputan sesuai atau tidak
        if (Auth::attempt($credential)){

            return redirect()->intended('/admin-gallery');
        }

        return back()->with('error', 'Username atau Password salah!');
    }

    public function logout(){
        //menghapus sesi login
        Auth::logout();
        return redirect('/login');
    }
}
