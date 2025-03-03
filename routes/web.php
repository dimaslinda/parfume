<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\ProfileController;
use App\Filament\Pages\SalesForm;

Route::get('/', [GeneralController::class, 'index'])->name('home');
Route::get('/products', [GeneralController::class, 'products'])->name('products');
Route::get('/detailproducts/{slug}', [GeneralController::class, 'detailproducts'])->name('detailproducts');
Route::get('/mitra', [GeneralController::class, 'mitra'])->name('mitra');

// filament custom
Route::get('/filament/sales-form/{user}', [SalesForm::class, '__invoke'])->name('filament.pages.sales-form');


Route::get('/dashboard', [GeneralController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
