<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SubscriptionController;
use Illuminate\Support\Facades\Route;
use NunoMaduro\Collision\Adapters\Phpunit\Subscribers\Subscriber;

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
Route::get('/portfolio/{id}', [PortfolioController::class, 'show'])->name('portfolio.show');
Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/services',[ServiceController::class,'index'])->name('services');
Route::get('/resume',[PublicController::class,'resume'])->name('resume');
Route::post('/subscriptions', [SubscriptionController::class, 'store'])->name('subscriptions.store');
Route::get('/resume/download', function () {
    $filePath = public_path('files/emran-cv.pdf');
    return response()->download($filePath);
})->name('resume.download');
Route::get('/blog',[BlogController::class,'index'])->name('blog');
Route::get('/contact',[PublicController::class,'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //portfolio action route
    Route::get('/portfolio/{id}/edit', [PortfolioController::class, 'edit'])->name('portfolio.edit');
    Route::put('/portfolio/{id}', [PortfolioController::class, 'update'])->name('portfolio.update');
    Route::delete('/portfolio/{id}', [PortfolioController::class, 'destroy'])->name('portfolio.destroy');


    Route::get('/portfolios',[PortfolioController::class,'getPortfolio'])->name('portfolios');
    Route::get('/portfolio-form',[PortfolioController::class,'formPage'])->name('portfolioForm');
    Route::post('/projects', [PortfolioController::class, 'store'])->name('projects.store');

    Route::get('/blogs',[BlogController::class,'getBlogs'])->name('blogs');
    Route::get('/blogForm',[BlogController::class,'blogForm'])->name('blogForm');
    Route::post('/posts', [BlogController::class, 'store'])->name('posts.store');
    
    Route::get('/post/{id}/edit', [BlogController::class, 'edit'])->name('post.edit');
    Route::put('/post/{id}', [BlogController::class, 'update'])->name('post.update');
    Route::delete('/post/{id}', [BlogController::class, 'destroy'])->name('post.destroy');
});

require __DIR__.'/auth.php';