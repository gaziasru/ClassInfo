<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HOMEcontrol extends Controller
{
    public function login(){
    	return view('login');
    }
}
