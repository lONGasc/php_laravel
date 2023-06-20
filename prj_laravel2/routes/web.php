<?php

use Illuminate\Support\Facades\Route;

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
    return Hash::make('123');
});

use App\Http\Controllers\LoginController;
Route::get('login1',[LoginController::class,'index']);
Route::post('login1',[LoginController::class,'login']);
Route::get('logout',[LoginController::class,'logout']);
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
Route::resource("admin/user",UsersController::class)->middleware("check_login");
Route::resource("admin/category",CategoriesController::class)->middleware("check_login");
Route::resource("admin/product",ProductsController::class)->middleware("check_login");
Route::resource("home",HomeController::class);
Route::get("home/category/{id}",[HomeController::class,"category"]);
Route::get("home/product/{id}",[HomeController::class,"detail"]);
Route::resource("cart",CartController::class);
