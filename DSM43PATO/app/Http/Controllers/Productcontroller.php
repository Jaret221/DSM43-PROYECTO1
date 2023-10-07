<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Productcontroller extends Controller
{
    public function funcion1(){
        return view ('products/index');
    }
}
