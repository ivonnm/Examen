<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MigracionController extends Controller
{
    public function migracion(){
        return view('layout.migracion');
    }
}
