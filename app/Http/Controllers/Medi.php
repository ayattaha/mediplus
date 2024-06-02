<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Medi extends Controller
{
    public function home(){
        return view('home');
    }
}
