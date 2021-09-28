<?php

use App\Http\Controllers\ControladoresController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\InstalacionController;
use App\Http\Controllers\MigracionController;
use App\Http\Controllers\RutasController;
use App\Http\Controllers\VistasBladeController;
use App\Http\Controllers\VistasController;
use Illuminate\Support\Facades\Route;


Route::get('/', InicioController::class);
Route::get('/instalacion', [InstalacionController::class, 'instalacion']);
Route::get('/vistas', [VistasController::class, 'vistas']);
Route::get('/vistasblade', [VistasBladeController::class, 'vistasblade']);
Route::get('/rutas', [RutasController::class, 'rutas']);
Route::get('/controladores', [ControladoresController::class, 'controladores']);
Route::get('/migracion', [MigracionController::class, 'migracion']);

