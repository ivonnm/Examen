<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VistasBladeController extends Controller
{
    public function vistasblade(){
        return view('layout.vistasblade');
    }
}
