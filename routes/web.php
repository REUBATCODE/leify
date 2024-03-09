<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Landing page
Route::get('/', function () {
    return view('landing');
})->name('landing');

// Artists routes
Route::prefix('/artists')->group(function () {
    Route::get('/', [ProfileController::class, 'index'])->name('artists.list');
    Route::get('/view/{id}', [ProfileController::class, 'view'])->name('artists.view');
    Route::get('/update/{id}', [ProfileController::class, 'updateArtist'])->name('artists.update');
    Route::get('/delete/{id}', [ProfileController::class, 'deleteArtist'])->name('artists.delete');
    Route::get('/create', [ProfileController::class, 'createArtist'])->name('artists.create');
    Route::post('/create', [ProfileController::class, 'storeArtist'])->name('artists.store');
});

// Authenticated routes
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
