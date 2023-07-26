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
Route::get("/comics/create",[AdminComicController::class,'create'])->name("admin.comics.create");
Route::post("/comics",[AdminComicController::class,'store'])->name("admin.comics.store");
Route::get("/comics/{id}",[AdminComicController::class,'show'])->name("admin.comics.show");
Route::get("/comics/{id}/edit",[AdminComicController::class,'edit'])->name("admin.comics.edit");
Route::put("/comics/{id}",[AdminComicController::class,'update'])->name("admin.comics.update");
Route::delete("/comics/{id}",[AdminComicController::class,'destroy'])->name("admin.comics.destroy");

