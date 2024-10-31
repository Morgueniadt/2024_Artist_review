<?php

use App\Http\Controllers\AlbumController;
use Illuminate\Support\Facades\Route;

<<<<<<< HEAD

=======
>>>>>>> a71220dd7e4c92547d714fd381bab85e00711cac
// Album Index
Route::get('/album', [AlbumController::class, 'index'])->name('album.index');

// Album Show
<<<<<<< HEAD
  Route::get('/album/{album}/show', [AlbumController::class, 'show'])->name('album.show');

// Album create
  Route::get('/album/{album}', [AlbumController::class, 'show'])->name('album.show');
=======
Route::get('/album/{album}/show', [AlbumController::class, 'show'])->name('album.show');

// Album Create
Route::get('/album/create', [AlbumController::class, 'create'])->name('album.create');

// Album Store
Route::post('/album', [AlbumController::class, 'store'])->name('album.store');
>>>>>>> a71220dd7e4c92547d714fd381bab85e00711cac

// Album Edit
Route::get('/album/{album}/edit', [AlbumController::class, 'edit'])->name('album.edit');

<<<<<<< HEAD
// Album Store 
Route::post('/album', [AlbumController::class, 'store'])->name('album.store');

=======
>>>>>>> a71220dd7e4c92547d714fd381bab85e00711cac
// Album Update
Route::patch('/album/{album}', [AlbumController::class, 'update'])->name('album.update');

// Album Destroy
Route::delete('/album/{album}', [AlbumController::class, 'destroy'])->name('album.destroy');

// Home Route
Route::get('/', function () {
    return view('welcome');
});

// Dashboard Route with Middleware
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Grouped Routes requiring Authentication
Route::middleware('auth')->group(function () {
<<<<<<< HEAD

  Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
=======
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
>>>>>>> a71220dd7e4c92547d714fd381bab85e00711cac
});

// Load authentication routes
require __DIR__.'/auth.php';
