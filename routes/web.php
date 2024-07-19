<?php

use App\Http\Controllers\JogosController;
use Illuminate\Support\Facades\Route;

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

Route::prefix('jogos')->group(function () {
    Route::get('/', [JogosController::class, 'index']);
    Route::get('/create', [JogosController::class, 'create']);
});

Route::fallback(function (){
    return "Erro";
});
