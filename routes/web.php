<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
// Course
Route::controller(CourseController::class)->group(function(){
    Route::get('/course/{course:slug}', 'show')->name('course.show');
});
// Cart management
Route::controller(CartController::class)->group(function(){
    Route::get('/cart', 'index')->name('cart.index');
    Route::get('addToCart/{course:slug}', 'addToCart')->name('addtocart');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
