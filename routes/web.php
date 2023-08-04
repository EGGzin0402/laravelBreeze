<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ViewController;

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

Route::get('/', [ViewController::class, 'index'])->name('index');

// Rotas Cliente
Route::get('/Cliente/create', [ClienteController::class, 'create'])->name('Cliente.create');
Route::get('/Cliente', [ClienteController::class, 'index'])->name('Cliente.index');
Route::get('/Cliente/{Cliente}', [ClienteController::class, 'show'])->name('Cliente.show');
Route::post('/Cliente', [ClienteController::class, 'store'])->name('Cliente.store');
Route::get('/Cliente/{Cliente}/edit', [ClienteController::class, 'edit'])->name('Cliente.edit');
Route::put('/Cliente/{Cliente}', [ClienteController::class, 'update'])->name('Cliente.update');
Route::delete('/Cliente/{Cliente}', [ClienteController::class, 'destroy'])->name('Cliente.destroy');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
