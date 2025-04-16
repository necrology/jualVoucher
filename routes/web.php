<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JualVoucherController;

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


Route::controller(JualVoucherController::class)->group(function () {
    Route::get('/', 'dashboard')->name('dashboard');
    Route::get('generate', 'generate')->name('generate');
});