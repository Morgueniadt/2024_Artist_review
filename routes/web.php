<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SongController;
use Illuminate\Support\Facades\Route;

// Album Routes
Route::get('/album', [AlbumController::class, 'index'])->name('album.index');  // View all albums
Route::get('/album/{album}', [AlbumController::class, 'show'])->name('album.show');  // View single album
Route::get('/album/create', [AlbumController::class, 'create'])->name('album.create');  // Form to create a new album
Route::post('/album', [AlbumController::class, 'store'])->name('album.store');  // Store new album
Route::get('/album/{album}/edit', [AlbumController::class, 'edit'])->name('album.edit');  // Edit an existing album
Route::put('/album/{album}', [AlbumController::class, 'update'])->name('album.update');  // Update an album
Route::delete('/album/{album}', [AlbumController::class, 'destroy'])->name('album.destroy');  // Delete an album

// Song Routes
Route::get('/song', [SongController::class, 'index'])->name('song.index');  // View all song
Route::get('/song/{song}', [SongController::class, 'show'])->name('song.show');  // View a single song
Route::get('/song/create', [SongController::class, 'create'])->name('song.create');  // Form to create a new song
Route::post('/song', [SongController::class, 'store'])->name('song.store');  // Store new song
Route::get('/song/{song}/edit', [SongController::class, 'edit'])->name('song.edit');  // Form to edit an existing song
Route::put('/song/{song}', [SongController::class, 'update'])->name('song.update');  // Update an existing song
Route::delete('/song/{song}', [SongController::class, 'destroy'])->name('song.destroy');  // Delete a song


// Home Route (Landing page)
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Dashboard Route with Middleware (User dashboard)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Grouped Routes requiring Authentication (User profile management)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');  // Edit profile
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');  // Update profile
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');  // Delete profile
});

// Review Routes (Resourceful CRUD for reviews)
Route::resource('reviews', ReviewController::class);  // This automatically handles CRUD for reviews

// Store a review for an album (this route should be placed outside the 'auth' middleware if reviews are public)
Route::post('/album/{album}/reviews', [ReviewController::class, 'store'])->name('reviews.store');

// Load authentication routes (Login, Register, etc.)
require __DIR__.'/auth.php';
