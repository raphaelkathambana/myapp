<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.signup');
    }

    public function store(Request $request)
    {
        //validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'username' => 'required',
            'password' => 'required|confirmed'
        ]);
    }
}
