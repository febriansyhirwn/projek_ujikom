<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function auth(Request $request)
    {
        $credemtial = $request->only('email', 'password');
        if (Auth::attempt($credemtial)) {
            return redirect()->intended('dasbord');
        }
        return redirect()->back();
    }
}