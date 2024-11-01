<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\FreePoint\{CreateFreePointController,
    DeleteFreePointController,
    EditFreePointController,
    FreePointController,
    StoreFreePointController,
    UpdateFreePointController
};
use App\Http\Controllers\Admin\Mechanic\{CreateMechanicController,
    DeleteMechanicController,
    EditMechanicController,
    MechanicController,
    StoreMechanicController,
    UpdateMechanicController
};
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
    UpdateLoreController
};
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

    Route::prefix('freePoint')->group(function () {
        Route::get('/', [FreePointController::class, '__invoke'])->name('admin.freePoint.index');
        Route::get('/create', [CreateFreePointController::class, '__invoke'])->name('admin.freePoint.create');
        Route::post('/', [StoreFreePointController::class, '__invoke'])->name('admin.freePoint.store');
        Route::get('/{freePoint}/edit', [EditFreePointController::class, '__invoke'])->name('admin.freePoint.edit');
        Route::patch('/{freePoint}', [UpdateFreePointController::class, '__invoke'])->name('admin.freePoint.update');
        Route::delete('/{freePoint}', [DeleteFreePointController::class, '__invoke'])->name('admin.freePoint.delete');
    });

    Route::prefix('Mechanic')->group(function () {
        Route::get('/', [MechanicController::class, '__invoke'])->name('admin.mechanic.index');
        Route::get('/create', [CreateMechanicController::class, '__invoke'])->name('admin.mechanic.create');
        Route::post('/', [StoreMechanicController::class, '__invoke'])->name('admin.mechanic.store');
        Route::get('/{mechanic}/edit', [EditMechanicController::class, '__invoke'])->name('admin.mechanic.edit');
        Route::patch('/{mechanic}', [UpdateMechanicController::class, '__invoke'])->name('admin.mechanic.update');
        Route::delete('/{mechanic}', [DeleteMechanicController::class, '__invoke'])->name('admin.mechanic.delete');
    });
});

Auth::routes();

