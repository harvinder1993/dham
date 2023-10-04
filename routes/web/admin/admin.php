<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

/*------------All Normal Users Routes List-------------*/
Route::middleware(['auth', 'user-access:admin'])->prefix('admin')->group(function () {
    Route::get('/', [App\Http\Controllers\Web\Admin\IndexController::class, 'index'])->name('admin.index');
    Route::prefix('organizations')->group(function () {
        Route::get('/', [App\Http\Controllers\Web\Admin\Organization\IndexController::class, 'index'])->name('organization.index');
        Route::get('/add', [App\Http\Controllers\Web\Admin\Organization\IndexController::class, 'create'])->name('organization.create');
        Route::post('/store', [App\Http\Controllers\Web\Admin\Organization\IndexController::class, 'store'])->name('organization.store');
        Route::get('/edit/{id}', [App\Http\Controllers\Web\Admin\Organization\IndexController::class, 'edit'])->name('organization.edit');
        Route::post('/update/{id}', [App\Http\Controllers\Web\Admin\Organization\IndexController::class, 'update'])->name('organization.update');
        Route::delete('/destroy/{id}', [App\Http\Controllers\Web\Admin\Organization\IndexController::class, 'destroy'])->name('organization.destroy');
    });
});
