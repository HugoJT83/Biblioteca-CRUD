<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', HomeController::class)->name("main");

/* Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
 */

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource("libros", LibroController::class)
    ->middleware('auth');

Route::fallback(function(){

    $url = request()->url();
    $path = request()->path();
    return response()->view(
        "Error",
        [
        'url' => $url,
        'path' => $path
        ],
        404);
});

require __DIR__.'/auth.php';
