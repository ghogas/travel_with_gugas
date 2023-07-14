<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoteirosController;
use App\Models\Roteiro;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('apresentacao');
});

Route::get('/privacidade', function () {
    return view('privacidade');
})->name('privacidade');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/portifolio', function () {
        return view('portifolio');
    })->name('portifolio');
    Route::get('/contato', function () {
        return view('contato');
    })->name('contato');
    Route::get('/resultado', function () {
        return view('resultado');
    })->name('resultado');
    Route::get('/pesquisa', function () {
        return view('pesquisa');
    })->name('pesquisa');
    Route::get('/configuracoes', function () {
        return view('configuracoes');
    })->name('configuracoes');
    Route::get('/perfil', function () {
        return view('perfil');
    })->name('perfil');
    Route::get('/roteiros', function () {
        return view('roteiros');
    })->name('roteiros');
    Route::post('/novoroteiro', [
        RoteirosController::class,
        'store'
    ])->name('novoroteiro');
    // Route::post('/listroteiros', [
    //     RoteirosController::class,
    //     'read'
    // ])->name('listroteiros');
    Route::middleware(['auth:sanctum', 'verified'])
        ->get('/roteiros', [RoteirosController::class, 'getRoteiros'])
        ->name('roteiros');
});
