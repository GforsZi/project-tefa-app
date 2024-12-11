<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

use App\Models\User;

class Register extends Controller
{
  public function show(): view
  {
    return view("register.index", [
      "tittle" => "Register page",
    ]);
  }
  public function store(Request $request)
  {
    if ($request["password"] !== $request["frim-pass"]) {
      return redirect("/Register");
      exit();
    }
    $validateData = $request->validate([
      "name" => "required | min:3 | max:255",
      "username" => "required | min:3 | max:255 | unique:users,username",
      "major" => "required",
      "password" => "required | min:5 | max:30",
    ]);

    $validateData["password"] = Hash::make($validateData["password"]);

    User::create($validateData);
    return redirect("/login")->with("success", "account created");
  }
}
