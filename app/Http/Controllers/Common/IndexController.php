<?php

namespace App\Http\Controllers\Common;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index(){
        var_dump(__METHOD__);
    }

    public function login(){

        return view('login', ['name' => 'James']);
    }

    public function logout(){

    }
}
