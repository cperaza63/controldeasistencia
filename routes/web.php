<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MiembroController;

Route::get('/', function () { return view('index'); })->middleware('auth');
// desabilitar Auth::routes();
Auth::routes(['register'=>false]);

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');

//Route::get('/miembros', function(){ return view('miembros.index'); })->middleware('auth');
// llamada al controlador quien controlara todo....

// con esta linea de codigo creamos todas las rutas de un control - crud

Route::resource('/miembros', MiembroController::class);

//Route::get('/miembros', [MiembroController::class, 'index'])->name('home')->middleware('auth');
//Route::get('/miembros/create', [MiembroController::class, 'create'])->middleware('auth');
//Route::get('/miembros/create', function(){ return view('miembros.create'); })->middleware('auth');
