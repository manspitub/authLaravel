<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Rutas protegidas

    Route::get('/clients', [ClientController::class, 'index'])->name('client.index');
    Route::get('/client/create', [ClientController::class, 'create'])->name('client.create');
    Route::post("client/create", [ClientController::class, 'store'])->name('client.store'); // Ruta para crear un post
    Route::get('client/{client}', [ClientController::class, 'show'])->name('client.show');
    Route::get("client/{client}/edit", [ClientController::class, 'edit'])->name("client.edit");
    Route::patch('client/{client}', [ClientController::class, 'update'])->name('client.update');
    Route::delete('client/{client}', [ClientController::class, 'destroy'])->name('client.destroy');
});



require __DIR__ . '/auth.php';
