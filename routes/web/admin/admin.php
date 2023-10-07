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
    /**
     * Routes For Organizations
     */
    Route::prefix('organizations')->group(function () {
        Route::get('/', [App\Http\Controllers\Web\Admin\Organization\IndexController::class, 'index'])->name('admin.organization.index');
        Route::get('/add', [App\Http\Controllers\Web\Admin\Organization\IndexController::class, 'create'])->name('admin.organization.create');
        Route::post('/store', [App\Http\Controllers\Web\Admin\Organization\IndexController::class, 'store'])->name('admin.organization.store');
        Route::get('/edit/{id}', [App\Http\Controllers\Web\Admin\Organization\IndexController::class, 'edit'])->name('admin.organization.edit');
        Route::post('/update/{id}', [App\Http\Controllers\Web\Admin\Organization\IndexController::class, 'update'])->name('admin.organization.update');
        Route::delete('/destroy/{id}', [App\Http\Controllers\Web\Admin\Organization\IndexController::class, 'destroy'])->name('admin.organization.destroy');
    });
    /**
     * Routes For Products
     */
    Route::prefix('products')->group(function () {
        Route::get('/', [App\Http\Controllers\Web\Admin\Products\IndexController::class, 'index'])->name('admin.products.index');
        Route::get('/add', [App\Http\Controllers\Web\Admin\Products\IndexController::class, 'create'])->name('admin.products.create');
        Route::post('/store', [App\Http\Controllers\Web\Admin\Products\IndexController::class, 'store'])->name('admin.products.store');
        Route::get('/edit/{id}', [App\Http\Controllers\Web\Admin\Products\IndexController::class, 'edit'])->name('admin.products.edit');
        Route::post('/update/{id}', [App\Http\Controllers\Web\Admin\Products\IndexController::class, 'update'])->name('admin.products.update');
        Route::delete('/destroy/{id}', [App\Http\Controllers\Web\Admin\Products\IndexController::class, 'destroy'])->name('admin.products.destroy');
    });

    /**
     * Routes For Products
     */
    Route::prefix('helping-centers')->group(function () {
        Route::get('/', [App\Http\Controllers\Web\Admin\HelpingCenter\IndexController::class, 'index'])->name('admin.helping-centers.index');
        Route::get('/add', [App\Http\Controllers\Web\Admin\HelpingCenter\IndexController::class, 'create'])->name('admin.helping-centers.create');
        Route::post('/store', [App\Http\Controllers\Web\Admin\HelpingCenter\IndexController::class, 'store'])->name('admin.helping-centers.store');
        Route::get('/edit/{id}', [App\Http\Controllers\Web\Admin\HelpingCenter\IndexController::class, 'edit'])->name('admin.helping-centers.edit');
        Route::post('/update/{id}', [App\Http\Controllers\Web\Admin\HelpingCenter\IndexController::class, 'update'])->name('admin.helping-centers.update');
        Route::delete('/destroy/{id}', [App\Http\Controllers\Web\Admin\HelpingCenter\IndexController::class, 'destroy'])->name('admin.helping-centers.destroy');
    });
});
