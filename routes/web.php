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
Route::get('pokemons', [PokemonsController::class, 'index'])->name('pokemons.index');
// 顯示單一寶可夢資料
Route::get('pokemons/{id}', [PokemonsController::class, 'show'])->where('id', '[0-9]+')->name('pokemons.show');
// 修改單一寶可夢表單
Route::get('pokemons/{id}/edit', [PokemonsController::class, 'edit'])->where('id', '[0-9]+')->name('pokemons.edit');
// 新增屬性表單
Route::get('pokemons/create', [PokemonsController::class, 'create'])->name('pokemons.create');
// 修改寶可夢表單
Route::get('pokemons/{id}/edit', [PokemonsController::class, 'edit'])->where('id', '[0-9]+')->name('pokemons.edit');
// 修改寶可夢
Route::get('pokemons/update/{id}', [PokemonsController::class, 'update'])->where('id', '[0-9]+')->name('pokemons.update');

// 顯示顯示所有屬性資料
Route::get('types', [TypesController::class, 'index'])->name('types.index');
// 顯示單一屬性資料
Route::get('types/{id}', [TypesController::class, 'show'])->where('id', '[0-9]+')->name('types.show');
// 修改單一屬性表單
Route::get('types/{id}/edit', [TypesController::class, 'edit'])->where('id', '[0-9]+')->name('types.edit');
// 新增屬性表單
Route::get('types/create', [TypesController::class, 'create'])->name('types.create');
// 修改屬性表單
Route::get('types/{id}/edit', [TypesController::class, 'edit'])->where('id', '[0-9]+')->name('types.edit');
// 修改屬性
Route::get('types/update/{id}', [TypesController::class, 'update'])->where('id', '[0-9]+')->name('types.update');

Route::get('pokemons',[PokemonsController::class,'index'])->name('pokemons.index');
Route::get('types',[TypesController::class,'index'])->name('types.index');