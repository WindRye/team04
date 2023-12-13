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
Route::get('pokemons/create',);
Route::get('pokemons/store',);
// 顯示單一寶可夢資料
Route::get('pokemons/{id}', [PokemonsController::class, 'show'])->where('id', '[0-9]+')->name('pokemons.show');
// 修改單一寶可夢表單 
Route::get('pokemons/{id}/edit', [PokemonsController::class, 'edit'])->where('id', '[0-9]+')->name('pokemons.edit');
// 刪除單一寶可夢資料
Route::delete('pokemons/delete/{id}', [PokemonsController::class, 'destroy'])->where('id', '[0-9]+')->name('pokemons.destroy');
Route::get('types/{id}/edit', [TypesController::class, 'edit'])->where('id', '[0-9]+')->name('types.edit');
//新增寶可夢表單 
Route::get('pokemon/create',[PokemonsController::class,'create'])->name('pokemons.create');

// 刪除單一球隊及旗下球員資料
Route::delete('types/delete/{id}', [TypesController::class, 'destroy'])->where('id', '[0-9]+')->name('types.destroy');
//新增屬性表單 
Route::get('type/create',[TypesController::class,'create'])->name('types.create');
