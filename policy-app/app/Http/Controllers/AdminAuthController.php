<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;

class AdminAuthController extends Controller
{


    public function getLogin(){
        return view('auth.login');
    }
    public function postLogin(LoginRequest $request){
        $request->authenticate();
    }
}
