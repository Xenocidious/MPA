<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Color;

class UserController extends Controller
{
    public function getRegister(){
        return view('register');
    }
    public function getLogin(){
        return view('login');
    }
}