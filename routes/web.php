<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MiembroController;
use App\Http\Controllers\MinisterioController;
use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\PDFController;

// desabilitar Auth::routes();
Auth::routes(['register'=>true]);

Route::get('/', [AdminController::class, 'index'])->middleware('auth');
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/asistencias/reportes', [AsistenciaController::class, 'reportes'])->name('asistencia.reportes')->middleware('auth');
Route::get('/asistencias/pdf', [AsistenciaController::class, 'pdf'])->name('asistencia.pdf')->middleware('auth');
Route::get('/asistencias/pdf_fechas', [AsistenciaController::class, 'pdf_fechas'])->name('asistencia.pdf_reportes')->middleware('auth');
Route::get('/usuarios/roles', [UserController::class, 'roles'])->name('usuarios.roles')->middleware('auth');
Route::get('/usuarios/{id}/roles', [UserController::class, 'roles'])->name('usuarios.roles')->middleware('auth');
Route::put('/usuarios/update_roles/{id}', [UserController::class, 'update_roles'])->name('usuarios.update_roles')->middleware('auth');

//Route::get('/generate-pdf', [PDFController::class, 'generatePDF']);
Route::resource('/miembros', MiembroController::class)->middleware('auth');
Route::resource('/ministerios', MinisterioController::class)->middleware('auth');
Route::resource('/usuarios', UserController::class)->middleware('auth');
Route::resource('/asistencias', AsistenciaController::class)->middleware('auth');

//
// ONLY)
//
//Route::resource('/asistencias', AsistenciaController::class)->only(['index','edit','update'])->middleware('auth');
//

//Route::get('/', function () { return view('index'); })->middleware('auth');
//Route::get('/miembros', function(){ return view('miembros.index'); })->middleware('auth');
// llamada al controlador quien controlara todo....
// con esta linea de codigo creamos todas las rutas de un control - crud
//Route::get('/miembros', [MiembroController::class, 'index'])->name('home')->middleware('auth');
//Route::get('/miembros/create', [MiembroController::class, 'create'])->middleware('auth');
//Route::get('/miembros/create', function(){ return view('miembros.create'); })->middleware('auth');
