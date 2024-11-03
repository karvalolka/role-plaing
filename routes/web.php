<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\FreePoint\{CreateFreePointController,
    DeleteFreePointController,
    EditFreePointController,
    FreePointController,
    StoreFreePointController,
    UpdateFreePointController
};
use App\Http\Controllers\Admin\Ability\{CreateAbilityController,
    DeleteAbilityController,
    EditAbilityController,
    AbilityController,
    ShowAbilityController,
    StoreAbilityController,
    UpdateAbilityController
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
use App\Http\Controllers\Admin\Subrace\{CreateSubraceController,
    DeleteSubraceController,
    EditSubraceController,
    SubraceController,
    StoreSubraceController,
    UpdateSubraceController
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

    Route::prefix('mechanic')->group(function () {
        Route::get('/', [MechanicController::class, '__invoke'])->name('admin.mechanic.index');
        Route::get('/create', [CreateMechanicController::class, '__invoke'])->name('admin.mechanic.create');
        Route::post('/', [StoreMechanicController::class, '__invoke'])->name('admin.mechanic.store');
        Route::get('/{mechanic}/edit', [EditMechanicController::class, '__invoke'])->name('admin.mechanic.edit');
        Route::patch('/{mechanic}', [UpdateMechanicController::class, '__invoke'])->name('admin.mechanic.update');
        Route::delete('/{mechanic}', [DeleteMechanicController::class, '__invoke'])->name('admin.mechanic.delete');
    });

    Route::prefix('ability')->group(function () {
        Route::get('/', [AbilityController::class, '__invoke'])->name('admin.ability.index');
        Route::get('/create', [CreateAbilityController::class, '__invoke'])->name('admin.ability.create');
        Route::post('/', [StoreAbilityController::class, '__invoke'])->name('admin.ability.store');
        Route::get('/{ability}', [ShowAbilityController::class, '__invoke'])->name('admin.ability.show');
        Route::get('/{ability}/edit', [EditAbilityController::class, '__invoke'])->name('admin.ability.edit');
        Route::patch('/{ability}', [UpdateAbilityController::class, '__invoke'])->name('admin.ability.update');
        Route::delete('/{ability}', [DeleteAbilityController::class, '__invoke'])->name('admin.ability.delete');
    });

    Route::prefix('subrace')->group(function () {
        Route::get('/', [SubraceController::class, '__invoke'])->name('admin.subrace.index');
        Route::get('/create', [CreateSubraceController::class, '__invoke'])->name('admin.subrace.create');
        Route::post('/', [StoreSubraceController::class, '__invoke'])->name('admin.subrace.store');
        Route::get('/{subrace}/edit', [EditSubraceController::class, '__invoke'])->name('admin.subrace.edit');
        Route::patch('/{subrace}', [UpdateSubraceController::class, '__invoke'])->name('admin.subrace.update');
        Route::delete('/{subrace}', [DeleteSubraceController::class, '__invoke'])->name('admin.subrace.delete');
    });
});

Auth::routes();

