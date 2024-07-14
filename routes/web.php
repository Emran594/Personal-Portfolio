<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ServiceController;
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
    return view('public/main');
});

// Page Route

Route::get('/portfolio',[PortfolioController::class,'index']);
Route::get('/services',[ServiceController::class,'index']);
Route::get('/resume',[PublicController::class,'resume']);
Route::get('/blog',[BlogController::class,'index']);
Route::get('/contact',[PublicController::class,'contact']);
