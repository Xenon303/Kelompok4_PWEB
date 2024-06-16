<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function store()
    {
        return view('register.index'); // Pastikan Anda memiliki view register.blade.php
    }

    public function register(Request $request)
    {


    // return $request ->all();
        // Validasi data input
       $validation =  $request->validate([
            'name' => 'required|',
            'email' => 'required|',
            'password' => 'required|',
        ]);

        // Simpan data ke dalam database
        User::create($validation);

        // Redirect ke halaman login atau dashboard setelah berhasil registrasi
        return redirect('/login');
    }
}

