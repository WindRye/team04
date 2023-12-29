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
// 修改寶可夢資料
Route::patch('pokemons/update/{id}', [PokemonsController::class, 'update'])->where('id', '[0-9]+')->name('pokemons.update');
// 儲存新寶可夢資料
Route::post('pokemons/store', [PokemonsController::class, 'store'])->where('id', '[0-9]+')->name('pokemons.store');
// 刪除單一寶可夢資料
Route::delete('pokemons/delete/{id}', [PokemonsController::class, 'destroy'])->where('id', '[0-9]+')->name('pokemons.destroy');
// 顯示寶可夢身高高於100資料
Route::get('pokemons/height', [PokemonsController::class, 'height'])->name('pokemons.height');
// 寶可夢地區查詢功能
Route::get('pokemons/region', [PokemonsController::class, 'region'])->name('pokemons.region');
// 選定特性查詢寶可夢
Route::get('pokemons/ability', [PokemonsController::class, 'ability'])->name('pokemons.ability');

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
// 刪除單一屬性及以下資料
Route::delete('types/delete/{id}', [TypesController::class, 'customDestroy'])->where('id', '[0-9]+')->name('types.destroy');
// 修改屬性資料
Route::patch('types/update/{id}', [TypesController::class, 'update'])->where('id', '[0-9]+')->name('types.update');
// 儲存新屬性資料
Route::post('types/store', [TypesController::class, 'store'])->name('types.store');

Route::get('pokemons',[PokemonsController::class,'index'])->name('pokemons.index');
Route::get('types',[TypesController::class,'index'])->name('types.index');