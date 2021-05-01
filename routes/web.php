<?php

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
use App\Http\Controllers\reuniaoController;

Route::get('/', [reuniaoController::class, 'home']);

Route::get('/convidados', [reuniaoController::class, 'convidados']);
Route::get('/usuarios', [reuniaoController::class, 'usuarios']);
Route::get('/reunioes',[reuniaoController::class, 'reuniao']);

Route::post('/usuarios',[reuniaoController::class, 'InsertUser']);
Route::post('/reunioes',[reuniaoController::class, 'InsertReuniao']);
Route::post('/convidados',[reuniaoController::class, 'InsertConvidado']);




