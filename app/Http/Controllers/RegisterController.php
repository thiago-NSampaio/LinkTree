<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function register(RegisterRequest $request){
        // dd($request);
        if($request->tryToRegister()){
            return to_route('dashboard');
        }
    }
}
