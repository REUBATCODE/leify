<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use PHPUnit\Framework\Attributes\Group;
use Symfony\Component\HttpKernel\Profiler\Profile;

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
    return view('landing');
})->name('landing');

Route::get('/artista', function () {
    return view('artista');
});

Route::prefix('/artists')->group(function () {
    Route::get('/',[ProfileController::class, 'index'])->name('artists.list');
    Route::get('/view/{id}',[ProfileController::class, 'view'])->name('artists.view');
    Route::get('/update/{id}', [ProfileController::class, 'updateArtist'])->name('artists.update');
});

Route::get('/album', function () {
    return view('album');
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
Route::prefix('/artists')->group(function () {
    Route::get('/',[ProfileController::class, 'index'])->name('artists.list');
    Route::get('/view/{id}',[ProfileController::class, 'view'])->name('artists.view');
});


Route::get('/album', function () {
    return view('album');
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
