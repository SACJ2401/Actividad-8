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
    return view('auth.login');
});

/*Route::get('/superHeroesInfo', function () {
    return view('superHeroesInfo.index');
});

Route::get('/superHeroesInfo/create',[SuperHeroeController::class,'create']);*/

Route::resource('superHeroesInfo', SuperHeroeController::class)->middleware('auth');
Auth::routes(['register'=>false,'reset'=>false]);

Route::get('/home', [SuperHeroeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function (){

    Route::get('/', [SuperHeroeController::class, 'index'])->name('home');
    
}); 
