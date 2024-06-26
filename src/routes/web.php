<?php
use Illuminate\Support\Facades\Route;
use Hyphun\HypCart\Http\Controllers\CartController;
Route::prefix('cart')->group(function() {
    Route::get('/', [CartController::class, 'index'])->name('cart.index');
    Route::post('add', [CartController::class, 'add'])->name('cart.add');
    Route::post('delete', [CartController::class, 'delete'])->name('cart.delete');
    Route::post('edit', [CartController::class, 'edit'])->name('cart.edit');
});
