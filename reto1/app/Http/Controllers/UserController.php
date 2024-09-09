<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    public function index(){
        return view("user.login");
    }

    public function login(Request $request){
        $date = $request->validate([
            "email"=> "required|email",
            "password"=> "required"]);

            if(!Auth ::attempt($date)){
                throw ValidationException ::withMessages([
                    "email"=> "Datos incorrectos"]);}

        $request->session()->regenerate();
        return view("welcome");
    }

    public function logout(){
        Auth ::logout();
        return view("user.login");}
}
