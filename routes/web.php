<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

Route::get("/", [HomeController::class, "index"]);

//USERS
Route::get("/users", [AdminController::class, "user"]);
Route::get("/deleteuser/{id}", [AdminController::class, "deleteuser"]);

//MENU

Route::get("/deletemenu/{id}", [AdminController::class, "deletemenu"]);
Route::get("/updateview/{id}", [AdminController::class, "updateview"]);
Route::post("/update/{id}", [AdminController::class, "update"]);

Route::get("/foodmenu", [AdminController::class, "foodmenu"]);
Route::post("/uploadfood", [AdminController::class, "upload"]);

//RESERVATION

Route::post("/reservation", [AdminController::class, "reservation"]);

Route::get("/viewreservation", [AdminController::class, "viewreservation"]);

//CHEFS

Route::get("/viewchef", [AdminController::class, "viewchef"]);
Route::post("/uploadchef", [AdminController::class, "uploadchef"]);
Route::get("/updatechef/{id}", [AdminController::class, "updatechef"]);
Route::post("/updatefoodchef/{id}", [AdminController::class, "updatefoodchef"]);

//CART

Route::post("/addcart/{id}", [HomeController::class, "addcart"]);
Route::get("/showcart/{id}", [HomeController::class, "showcart"]);

//BASE

Route::get("redirects", [HomeController::class, "redirects"]);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
