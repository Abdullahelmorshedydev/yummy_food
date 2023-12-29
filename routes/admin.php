<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Admin\HomeController;
use App\Http\Controllers\Web\Admin\Settings\FilesSettingsController;
use App\Http\Controllers\Web\Admin\Settings\GeneralSettingsController;

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

Route::get('/', HomeController::class)->name('index');

Route::prefix('/settings')->as('settings.')->group(function () {

    Route::controller(GeneralSettingsController::class)->prefix('/general')->as('general.')->group(function () {

        Route::get('/', 'index')->name('index');
        Route::put('/', 'update')->name('update');
    });

    Route::controller(FilesSettingsController::class)->prefix('/files')->as('files.')->group(function () {

        Route::get('/', 'index')->name('index');
        Route::put('/', 'update')->name('update');
    });
});
