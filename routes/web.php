<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PokemonsController;
use App\Http\Controllers\TypesController;
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
Route::get('/',function(){
    return redirect('pokemons');
});


Route::get('pokemons',[PokemonsController::class,'index'])->name('pokemons.index');
Route::get('pokemons/create',);
Route::get('pokemons/store',);



Route::get('types',[TypesController::class,'index'])->name('types.index');