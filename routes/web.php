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

Route::get('/', [ListarController::class, 'index']);


Route::get('/album', [AlbumController::class, 'create']);



Route::get('/faixa', [FaixaController::class, 'create']);

