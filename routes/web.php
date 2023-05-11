<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Htpp\Controllers\UserController;
use App\Htpp\Controllers\AcademicController;
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

Route::redirect('/', '/login');
Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');
Route::delete('/users/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('users.destroy');
Route::get('/users/create', [App\Http\Controllers\UserController::class, 'create'])->name('users.create');
Route::post('/users', [App\Http\Controllers\UserController::class, 'store'])->name('users.store');
Route::get('/users/{id}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');

Route::get('/academics', [App\Http\Controllers\AcademicController::class, 'index'])->name('academics.index');
Route::delete('/academics/{id}', [App\Http\Controllers\AcademicController::class, 'destroy'])->name('academics.destroy');
Route::get('/academics/create', [App\Http\Controllers\AcademicController::class, 'create'])->name('academics.create');
Route::post('/academics', [App\Http\Controllers\AcademicController::class, 'store'])->name('academics.store');
Route::get('/academics/{id}/edit', [App\Http\Controllers\AcademicController::class, 'edit'])->name('academics.edit');

Route::get('/administratives', [App\Http\Controllers\AdministrativeController::class, 'index'])->name('administratives.index');
Route::delete('/administratives/{id}', [App\Http\Controllers\AdministrativeController::class, 'destroy'])->name('administratives.destroy');
Route::get('/administratives/create', [App\Http\Controllers\AdministrativeController::class, 'create'])->name('administratives.create');
Route::post('/administratives', [App\Http\Controllers\AdministrativeController::class, 'store'])->name('administratives.store');
Route::get('/administratives/{id}/edit', [App\Http\Controllers\AdministrativeController::class, 'edit'])->name('administratives.edit');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/publicaciones', function () {
    return view('publicaciones');
})->middleware(['auth', 'verified'])->name('publicaciones');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
