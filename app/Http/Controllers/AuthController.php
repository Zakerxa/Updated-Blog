<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
      request()->validate([
        'username'=>['required','min:5','max:50'],
        'email'=>['required','email'],
        'password'=>['required','min:5','max:50']
      ]);
    }
}
