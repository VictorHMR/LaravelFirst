<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListarController;
use App\Http\Controllers\FaixaController;
use App\Http\Controllers\AlbumController;

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

Route::get('/', function(){
    return view('menu');
});
Route::get('/listar', [ListarController::class, 'index']);
Route::get('/listar/search', [ListarController::class, 'index']);


Route::get('/album', [AlbumController::class, 'index']);
Route::post('/album', [AlbumController::class, 'store']);
Route::delete('/album/{id}', [AlbumController::class, 'destroy']);

Route::get('/faixa', [FaixaController::class, 'index']);
Route::post('/faixa', [FaixaController::class, 'store']);
Route::delete('/faixa/{id}', [FaixaController::class, 'destroy']);

