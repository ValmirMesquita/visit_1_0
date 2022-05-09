<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisitantesController;
use App\Http\Controllers\OrgaosController;
use App\Http\Controllers\ServidoresController;
use App\Http\Controllers\VisitasController;
// use App\Http\Controllers\PDFController;


/*
|------------------------------------------------- -------------------------
| Rotas da Web
|------------------------------------------------- -------------------------
|
| Aqui é onde você pode registrar rotas da web para seu aplicativo. Esses
| as rotas são carregadas pelo RouteServiceProvider dentro de um grupo que
| contém o grupo de middleware "web". Agora crie algo grande!
|
*/

Route::resource('visitantes', VisitantesController::class)->middleware(['auth'])->parameter('visitantes', 'visitante');
Route::resource('orgaos', OrgaosController::class)->middleware(['auth']);
Route::resource('servidores', ServidoresController::class)->middleware(['auth']);
Route::resource('visitas', VisitasController::class)->middleware(['auth']);

// Correspondente a criação do pedf


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
