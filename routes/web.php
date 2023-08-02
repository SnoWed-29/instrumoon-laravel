<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfilesController;

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
Route::get('/', [ProductsController::class, 'index'])->name('home');
Route::get('/category/{name}', [ProductsController::class, 'category']);
Route::get('/product/{prod}', [ProductsController::class, 'product']);
Route::get('/product/{prod}/bill',[ProductsController::class,'showBill']);

Route::middleware('auth')->group(function () {
Route::post('/product/{prod}/bill',[ProductsController::class,'bill']);
Route::get('/profile/{userid}',[ProfilesController::class,'index']);
});

Route::fallback(function () {
    return view('pages.404');
});
Auth::routes();

