<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperHeroeController;

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
    return view('welcome');
});

/*Route::get('/superHeroesInfo', function () {
    return view('superHeroesInfo.index');
});

Route::get('/superHeroesInfo/create',[SuperHeroeController::class,'create']);*/

Route::resource('superHeroesInfo', SuperHeroeController::class);