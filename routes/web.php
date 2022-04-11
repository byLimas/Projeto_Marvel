<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\PersonagemController;
use Illuminate\Support\Facades\Route;
use App\Models\Personagem;

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

Route::get('/',[PersonagemController::class,'index']);


Route::get('/Personagem',[PersonagemController::class,'personagem']);

