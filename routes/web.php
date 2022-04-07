<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LembretesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/principal', [LembretesController::class, 'showLembretes'])->name('principal');

Route::middleware(['auth:sanctum', 'verified'])->post('/cadastra_lembrete', [LembretesController::class, 'cadastra_lembrete'])->name('cadastra_lembrete'); 


Route::middleware(['auth:sanctum', 'verified'])->get('/datas_comemorativas', function () {
    return view('datas_comemorativas');
})->name('datas_comemorativas');


Route::middleware(['auth:sanctum', 'verified'])->get('/remedios', function () {
    return view('remedios');
})->name('remedios');


Route::middleware(['auth:sanctum', 'verified'])->get('/notas_gerais', function () {
    return view('notas_gerais');
})->name('notas_gerais');


Route::middleware(['auth:sanctum', 'verified'])->get('/notas_academicas', function () {
    return view('notas_academicas');
})->name('notas_academicas');


Route::middleware(['auth:sanctum', 'verified'])->get('/boletos', function () {
    return view('boletos');
})->name('boletos');




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
