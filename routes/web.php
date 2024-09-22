<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CarController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cars', [CarController::class, 'index'])->name('admin.cars.index');

Route::get('/cars/create', [CarController::class, 'create'])->name('admin.cars.create'); // Add this line

Route::get('/cars/{car}/edit', [CarController::class, 'edit'])->name('admin.cars.edit');

Route::get('/cars/{car}', [CarController::class, 'show'])->name('admin.cars.show');

Route::post('/cars', [CarController::class, 'store'])->name('admin.cars.store');

Route::post('/cars/{car}', [CarController::class, 'update'])->name('admin.cars.update');

Route::delete('/cars/{car}', [CarController::class, 'destroy'])->name('admin.cars.destroy');
