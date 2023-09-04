<?php

use App\Http\Controllers\CustomController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [CustomController::class,"index"])->name("login");
Route::post("/loginpage",[CustomController::class,"loginpage"])->name("loginpage");
Route::get("/register",[CustomController::class,"register"])->name("register");
Route::post("/registerpage",[CustomController::class,"registerpage"])->name("registerpage");
