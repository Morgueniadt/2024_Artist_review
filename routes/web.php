<?php

use App\Http\Controllers\AlbumController;
use Illuminate\Support\Facades\Route;

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
    // Album Index
    Route::get('/album', [AlbumController::class, 'index'])->name('album.index');

    // Album Show
      Route::get('/album/{album}', [AlbumController::class, 'show'])->name('album.show');

    // Album create
      Route::get('/album/{album}', [AlbumController::class, 'show'])->name('album.show');

    // Album Edit
    Route::get('/album/{album}/edit', [AlbumController::class, 'edit'])->name('album.edit');

    // Album Store 
    Route::post('/album', [AlbumController::class, 'store'])->name('album.store');

    // Album Update
    Route::patch('/album/{album}', [AlbumController::class, 'update'])->name('album.update');

    // Album Destroy
    Route::delete('/album/{album}', [AlbumController::class, 'destroy'])->name('album.destroy');
});

// Load authentication routes
require __DIR__.'/auth.php';
