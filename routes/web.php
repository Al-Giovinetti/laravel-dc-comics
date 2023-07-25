<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\MovieController as AdminMovieController;
use App\Http\Controllers\Guest\HomeController as GuestHomeController;

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

Route::get("/index",[AdminMovieController::class,'index'])->name("admin.movies.index");

