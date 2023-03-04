<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

// use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
//     function login()
//     {
//         return view('login.login');
//     }
//     public function authentication(Request $request): RedirectResponse
//     {
//         $credentials = $request->validate([
//             'email' => ['required', 'email'],
//             'password' => ['required'],
//         ]);
//         function auth(Request $Request){-
//             $credential =$request->only('email','password');
//             if (Auth::attempt($credential)) {
//             return redirect('dashboard');
//     }
//     return redirect()->back();
// }
// return back()-widthErrors([
//     'email' => 'the provided credentials do not match our records.',
// ])-onlyinput('email');
//     }
}