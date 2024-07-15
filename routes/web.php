<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProfileController;
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



Route::get('/',[PublicController::class,'homepage'])->name('homepage');
Route::get('/portfolio',[PortfolioController::class,'index'])->name('portfolio');
Route::get('/services',[ServiceController::class,'index'])->name('services');
Route::get('/resume',[PublicController::class,'resume'])->name('resume');
Route::get('/blog',[BlogController::class,'index'])->name('blog');
Route::get('/contact',[PublicController::class,'contact'])->name('contact');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/portfolios',[PortfolioController::class,'getPortfolio'])->name('portfolios');
    Route::get('/blogs',[BlogController::class,'getBlogs'])->name('blogs');
});

require __DIR__.'/auth.php';
