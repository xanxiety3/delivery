<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    public function index(){
        return view("user.login");
    }
    public function login(Request $request){
        $data = $request->validate([
            "usuario"=> "required",
            "password"=> "required",]);
            if(!Auth::attempt($data)){
                throw ValidationException::withMessages([
                    "usuario"=> "Datos incorrectos",]);
            }

            $request->session()->regenerate();
            return view("sondeos.index");
        }
        public function logout(){
            Auth::logout();
        return view("welcome");
        }
            
}
