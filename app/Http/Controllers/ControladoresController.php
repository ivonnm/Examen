<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladoresController extends Controller
{
    public function controladores(){
        return view('layout.controladores');
    }
}
