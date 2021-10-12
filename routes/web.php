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

    Route::post('deposit', [App\Http\Controllers\Admin\BalanceController::class, 'depositStore'])->name('deposit.store');
    Route::get('deposit', [App\Http\Controllers\Admin\BalanceController::class, 'deposit'])->name('balance.deposit');

    Route::get('balance', [App\Http\Controllers\Admin\BalanceController::class, 'index'])->name('admin.balance');
    Route::get('/', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin.home');
});


//Route::get('admin', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin');

Route::get('/', [App\Http\Controllers\Portal\PortalController::class, 'index'])->name('home');

Auth::routes();
