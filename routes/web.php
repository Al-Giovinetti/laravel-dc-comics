<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Guest\HomeController as GuestHomeController;

use App\Http\Controllers\Admin\ComicController as AdminComicController;

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
Route::get("/",[GuestHomeController::class,'home'])->name("guest.home.index");

Route::get("/comics",[AdminComicController::class,'index'])->name("admin.comics.index");
Route::get("/comics/{id}",[AdminComicController::class,'show'])->name("admin.comics.show");

