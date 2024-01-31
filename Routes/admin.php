<?php

use Modules\Artisan\Http\Controllers\ArtisanController;

Route::prefix('artisan')->name('artisan.')->group(function () {
    Route::get('/', [ArtisanController::class, 'index'])->name('index')->middleware('permission');
    Route::post('/command', [ArtisanController::class, 'command'])->name('command')->middleware('permission');
});
