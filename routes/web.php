<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use Illuminate\Routing\RouteUri;
use App\Http\Controllers\CursosController;

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
    return view('index');
});

Route::get('users/{id}/{curso?}',UsersController::class);//así ira a buscar el metodo invoke


Route::get('cursos', [CursosController::class,'index']); //así le decimos que metodo va a buscar, en este caso index
Route::get('cursos/create', [CursosController::class,'create']);
Route::get('cursos/completados', [CursosController::class,'show']);
Route::get('cursos/proceso', [CursosController::class,'proces']);



