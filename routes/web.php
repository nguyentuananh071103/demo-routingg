<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\UserController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('users')->group(function (){
    Route::get("/",[UserController::class,"index"])->name("users.index");
    Route::get("/{id}/detail",[UserController::class,"show"])->name("users.show");
    Route::get("/{id}/delete",[UserController::class,"destroy"])->name("users.destroy");
    Route::get("/{id}/edit",[UserController::class,"edit"])->name("users.edit");
    Route::post("/{id}/edit",[UserController::class,"update"])->name("users.update");
    Route::post("/create",[UserController::class,"store"])->name("users.store")->middleware("checkAge");
});
