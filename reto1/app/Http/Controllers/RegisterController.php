<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function register(Request $request){
        $data= $request->validate([
            "name"=>"required",
            "email"=> "required|email",
            'password' => 'required|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*[\W_])[A-Za-z\d\W_]{8,}$/|confirmed',
            ]);

            $user = User::create($data);
            // se llama el metodo para asignar por defecto 
            $user->asignarRol();
            Auth::login($user);
 
            return view("welcome");
    }
    public function index(){
        return view("user.register");
    }
}
