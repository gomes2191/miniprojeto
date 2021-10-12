<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('admin', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin');
    Route::get('balance', [App\Http\Controllers\Admin\BalanceController::class, 'index'])->name('balance');
});


//Route::get('admin', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin');

//Route::get('/', [App\Http\Controllers\Portal\PortalController::class, 'index'])->name('home');

Auth::routes();
