<?php

use App\Http\Controllers\Admin\Ability\{AbilityController,
    CreateAbilityController,
    DeleteAbilityController,
    EditAbilityController,
    ShowAbilityController,
    StoreAbilityController,
    UpdateAbilityController
};
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Cube\{CreateCubeController,
    CubeController,
    DeleteCubeController,
    EditCubeController,
    StoreCubeController,
    UpdateCubeController
};
use App\Http\Controllers\Admin\FreePoint\{CreateFreePointController,
    DeleteFreePointController,
    EditFreePointController,
    FreePointController,
    StoreFreePointController,
    UpdateFreePointController
};
use App\Http\Controllers\Admin\Grade\{CreateGradeController,
    DeleteGradeController,
    EditGradeController,
    GradeController,
    StoreGradeController,
    UpdateGradeController,
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
use App\Http\Controllers\Admin\Mechanic\{CreateMechanicController,
    DeleteMechanicController,
    EditMechanicController,
    MechanicController,
    StoreMechanicController,
    UpdateMechanicController
};
use App\Http\Controllers\Admin\Race\{CreateRaceController,
    DeleteRaceController,
    EditRaceController,
    RaceController,
    StoreRaceController,
    UpdateRaceController
};
use App\Http\Controllers\Admin\Subgrade\{CreateSubgradeController,
    DeleteSubgradeController,
    EditSubgradeController,
    StoreSubgradeController,
    SubgradeController,
    UpdateSubgradeController
};
use App\Http\Controllers\Admin\Subrace\{CreateSubraceController,
    DeleteSubraceController,
    EditSubraceController,
    StoreSubraceController,
    SubraceController,
    UpdateSubraceController
};
use App\Http\Controllers\Admin\TypeAbility\{CreateTypeAbilityController,
    DeleteTypeAbilityController,
    EditTypeAbilityController,
    StoreTypeAbilityController,
    TypeAbilityController,
    UpdateTypeAbilityController
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

    Route::prefix('race')->group(function () {
        Route::get('/', [RaceController::class, '__invoke'])->name('admin.race.index');
        Route::get('/create', [CreateRaceController::class, '__invoke'])->name('admin.race.create');
        Route::post('/', [StoreRaceController::class, '__invoke'])->name('admin.race.store');
        Route::get('/{race}/edit', [EditRaceController::class, '__invoke'])->name('admin.race.edit');
        Route::patch('/{race}', [UpdateRaceController::class, '__invoke'])->name('admin.race.update');
        Route::delete('/{race}', [DeleteRaceController::class, '__invoke'])->name('admin.race.delete');
    });

    Route::prefix('grade')->group(function () {
        Route::get('/', [GradeController::class, '__invoke'])->name('admin.grade.index');
        Route::get('/create', [CreateGradeController::class, '__invoke'])->name('admin.grade.create');
        Route::post('/', [StoreGradeController::class, '__invoke'])->name('admin.grade.store');
        Route::get('/{grade}/edit', [EditGradeController::class, '__invoke'])->name('admin.grade.edit');
        Route::patch('/{grade}', [UpdateGradeController::class, '__invoke'])->name('admin.grade.update');
        Route::delete('/{grade}', [DeleteGradeController::class, '__invoke'])->name('admin.grade.delete');
    });

    Route::prefix('subgrade')->group(function () {
        Route::get('/', [SubgradeController::class, '__invoke'])->name('admin.subgrade.index');
        Route::get('/create', [CreateSubgradeController::class, '__invoke'])->name('admin.subgrade.create');
        Route::post('/', [StoreSubgradeController::class, '__invoke'])->name('admin.subgrade.store');
        Route::get('/{subgrade}/edit', [EditSubgradeController::class, '__invoke'])->name('admin.subgrade.edit');
        Route::patch('/{subgrade}', [UpdateSubgradeController::class, '__invoke'])->name('admin.subgrade.update');
        Route::delete('/{subgrade}', [DeleteSubgradeController::class, '__invoke'])->name('admin.subgrade.delete');
    });

    Route::prefix('typeAbility')->group(function () {
        Route::get('/', [TypeAbilityController::class, '__invoke'])->name('admin.typeAbility.index');
        Route::get('/create', [CreateTypeAbilityController::class, '__invoke'])->name('admin.typeAbility.create');
        Route::post('/', [StoreTypeAbilityController::class, '__invoke'])->name('admin.typeAbility.store');
        Route::get('/{typeAbility}/edit', [EditTypeAbilityController::class, '__invoke'])->name('admin.typeAbility.edit');
        Route::patch('/{typeAbility}', [UpdateTypeAbilityController::class, '__invoke'])->name('admin.typeAbility.update');
        Route::delete('/{typeAbility}', [DeleteTypeAbilityController::class, '__invoke'])->name('admin.typeAbility.delete');
    });

    Route::prefix('cube')->group(function () {
        Route::get('/', [CubeController::class, '__invoke'])->name('admin.cube.index');
        Route::get('/create', [CreateCubeController::class, '__invoke'])->name('admin.cube.create');
        Route::post('/', [StoreCubeController::class, '__invoke'])->name('admin.cube.store');
        Route::get('/{cube}/edit', [EditCubeController::class, '__invoke'])->name('admin.cube.edit');
        Route::patch('/{cube}', [UpdateCubeController::class, '__invoke'])->name('admin.cube.update');
        Route::delete('/{cube}', [DeleteCubeController::class, '__invoke'])->name('admin.cube.delete');
    });
});

Auth::routes();

