<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VistasController extends Controller
{
    public function vistas(){
        return view('layout.vistas');
    }
}
