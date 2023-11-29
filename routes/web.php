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

// 顯示顯示所有寶可夢資料
Route::get('pokemons',[PokemonsController::class,'index'])->name('pokemons.index');
// 顯示單一寶可夢資料
Route::get('pokemons/{id}', [PokemonsController::class, 'show'])->where('id', '[0-9]+')->name('pokemons.show');
// 修改單一寶可夢表單
Route::get('pokemons/{id}/edit', [PokemonsController::class, 'edit'])->where('id', '[0-9]+')->name('pokemons.edit');



Route::get('types',[TypesController::class,'index'])->name('types.index');