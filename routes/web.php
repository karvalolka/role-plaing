<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Inventory\{CreateInventoryController,
    DeleteInventoryController,
    EditInventoryController,
    InventoryController,
    StoreInventoryController,
    UpdateInventoryController
};
use App\Http\Controllers\Admin\Lore\{CreateLoreController,
    DeleteLoreController,
    EditLoreController,
    LoreController,
    StoreLoreController,
    UpdateLoreController};
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function () {
    Route::get('/', AdminController::class);
    Route::prefix('lore')->group(function () {
        Route::get('/', [LoreController::class, '__invoke'])->name('admin.lore.index');
        Route::get('/create', [CreateLoreController::class, '__invoke'])->name('admin.lore.create');
        Route::post('/', [StoreLoreController::class, '__invoke'])->name('admin.lore.store');
        Route::get('/{lore}/edit', [EditLoreController::class, '__invoke'])->name('admin.lore.edit');
        Route::patch('/{lore}', [UpdateLoreController::class, '__invoke'])->name('admin.lore.update');
        Route::delete('/{lore}', [DeleteLoreController::class, '__invoke'])->name('admin.lore.delete');
    });

    Route::prefix('inventory')->group(function () {
        Route::get('/', [InventoryController::class, '__invoke'])->name('admin.inventory.index');
        Route::get('/create', [CreateInventoryController::class, '__invoke'])->name('admin.inventory.create');
        Route::post('/', [StoreInventoryController::class, '__invoke'])->name('admin.inventory.store');
        Route::get('/{inventory}/edit', [EditInventoryController::class, '__invoke'])->name('admin.inventory.edit');
        Route::patch('/{inventory}', [UpdateInventoryController::class, '__invoke'])->name('admin.inventory.update');
        Route::delete('/{inventory}', [DeleteInventoryController::class, '__invoke'])->name('admin.inventory.delete');
    });
});

Auth::routes();

