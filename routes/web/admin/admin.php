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
    Route::get('/', [App\Http\Controllers\Web\Admin\Organization\IndexController::class, 'index'])->name('admin.index');
});

// /*----------All Admin Routes List---------*/
// Route::middleware(['auth', 'user-access:admin'])->group(function () {
//     Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
// });

// /*------All Member Routes List-----------*/
// Route::middleware(['auth', 'user-access:member'])->group(function () {
//     Route::get('/member/home', [HomeController::class, 'memberHome'])->name('member.home');
// });