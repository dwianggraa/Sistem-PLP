<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function index(){
        return view('login.login');
    }

    public function autentifikasi(Request $request){

        if(Auth::attempt($request->only('email','password'))){
            return redirect('/dashboard');
            // dd($request->all());
        
    }
    return redirect('login');
}

public function logout(){
    Auth::logout();
    return redirect('/login');
   }
}

