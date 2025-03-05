<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\ProfileController;
use App\Filament\Pages\SalesForm;
use App\Filament\Pages\SalesOverview;


Route::get('/', [GeneralController::class, 'index'])->name('home');
Route::get('/products', [GeneralController::class, 'products'])->name('products');
Route::get('/detailproducts/{slug}', [GeneralController::class, 'detailproducts'])->name('detailproducts');
Route::get('/mitra', [GeneralController::class, 'mitra'])->name('mitra');
Route::get('/aboutus', [GeneralController::class, 'aboutus'])->name('aboutus');

// filament custom
Route::get('/filament/sales-form/{user}', [SalesForm::class, '__invoke'])->name('filament.pages.sales-form');
Route::get('/sales-overview', SalesOverview::class)->name('filament.pages.sales-overview');
use App\Filament\Pages\SalesDetail;

Route::get('/sales-detail/{user}', SalesDetail::class)->name('filament.pages.sales-detail');




Route::get('/dashboard', [GeneralController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/claim-reward/{id}', [GeneralController::class, 'claimReward'])->name('claim-reward')->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
