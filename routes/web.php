<?php

use App\Http\Controllers\AlbumController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/album', [AlbumController::class, 'index'])->name('album.index');
    Route::get('/album', [AlbumController::class, 'edit'])->name('album.edit');
    Route::get('/album', [AlbumController::class, 'store'])->name('album.store');
    Route::get('/album', [AlbumController::class, 'show'])->name('album.show');
    Route::patch('/album', [AlbumController::class, 'update'])->name('album.update');
    Route::delete('/album', [AlbumController::class, 'destroy'])->name('album.destroy');

    Route::get('/album', [AlbumController::class, 'index'])->name('album.index');
    Route::get('/album/{album}', [AlbumController::class, 'show'])->name('album.show');

});

require __DIR__.'/auth.php';
