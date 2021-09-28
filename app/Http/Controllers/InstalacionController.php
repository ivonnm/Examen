<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstalacionController extends Controller
{
    public function instalacion(){
        return view('layout.instalacion');
    }
}
