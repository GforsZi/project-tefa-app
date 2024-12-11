<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class Login extends Controller
{
  public function show(): view
  {
    return view("login.index", [
      "tittle" => "Login page",
    ]);
  }
  
  public function auth(Request $request)
  {
    $credentials = $request->validate([
      "username" => "required | max:255",
      "password" => "required | max:255",
    ]);

    if (Auth::attempt($credentials)) {
      $request->session()->regenerate();

      return redirect()->intended("/home");
    }

    return back()->with("errorLogin", "Login failed!");
  }
}

