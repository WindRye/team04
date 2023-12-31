<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PokemonsController;
use App\Http\Controllers\TypesController;
use Illuminate\Support\Facades\Auth;
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
Route::middleware(['auth'])->group(function () {
    // 註解一下
    Route::get('/', function () {
        return redirect('pokemons');
    });
    // 顯示顯示所有寶可夢資料
    Route::get('pokemons',[PokemonsController::class,'index'])->name('pokemons.index');
    // 顯示單一寶可夢資料
    Route::get('pokemons/{id}', [PokemonsController::class, 'show'])->where('id', '[0-9]+')->name('pokemons.show');
    // 修改單一寶可夢表單
    Route::get('pokemons/{id}/edit', [PokemonsController::class, 'edit'])->where('id', '[0-9]+')->name('pokemons.edit');
    // 刪除單一寶可夢資料
    Route::delete('pokemons/delete/{id}', [PokemonsController::class, 'destroy'])->where('id', '[0-9]+')->name('pokemons.destroy')->middleware('can:admin');
    // 新增寶可夢表單
    Route::get('pokemons/create', [PokemonsController::class, 'create'])->name('pokemons.create')->middleware('can:admin');
    // 修改寶可夢表單
    Route::get('pokemons/{id}/edit', [PokemonsController::class, 'edit'])->where('id', '[0-9]+')->name('pokemons.edit');
    // 修改寶可夢資料
    Route::patch('pokemons/update/{id}', [PokemonsController::class, 'update'])->where('id', '[0-9]+')->name('pokemons.update');
    // 顯示寶可夢身高>100資料
    Route::get('pokemons/height', [PokemonsController::class, 'height'])->name('pokemons.height');
    // 選定地區查詢寶可夢
    Route::get('pokemons/region', [PokemonsController::class, 'region'])->name('pokemons.region');
    // 儲存新寶可夢資料
    Route::post('pokemons/store', [PokemonsController::class, 'store'])->where('id', '[0-9]+')->name('pokemons.store')->middleware('can:admin');
    // 選定特性查詢寶可夢
    Route::get('pokemons/ability', [PokemonsController::class, 'ability'])->name('pokemons.ability');

    // 顯示顯示所有屬性資料
    Route::get('types',[TypesController::class,'index'])->name('types.index');
    // 顯示單一屬性資料
    Route::get('types/{id}', [TypesController::class, 'show'])->where('id', '[0-9]+')->name('types.show');
    // 修改單一屬性
    Route::get('types/{id}/edit', [TypesController::class, 'edit'])->where('id', '[0-9]+')->name('types.edit');


    // 新增屬性表單
    Route::get('types/create', [TypesController::class, 'create'])->name('types.create')->middleware('can:admin');
    // 修改屬性表單
    Route::get('types/{id}/edit', [TypesController::class, 'edit'])->where('id', '[0-9]+')->name('types.edit');
    // 修改屬性資料
    Route::patch('types/update/{id}', [TypesController::class, 'update'])->where('id', '[0-9]+')->name('types.update');
    // 儲存新屬性資料
    Route::post('types/store', [TypesController::class, 'store'])->name('types.store')->middleware('can:admin');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
