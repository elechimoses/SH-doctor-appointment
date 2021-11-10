<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::middleware('auth:sanctum')->group(function () {
    Route::get('home', [HomeController::class, 'index'])->name('home');

    Route::prefix('appointments')->group(function () {
        Route::get('/', [AppointmentController::class, 'index'])->name('appointment.index');
        Route::get('/create', [AppointmentController::class, 'create'])->name('appointment.create');
        Route::post('/', [AppointmentController::class, 'store'])->name('appointment.store');

        Route::prefix('{appointment}')->group(function () {
            Route::get('/', [AppointmentController::class, 'show'])->name('appointment.show');
            Route::get('/edit', [AppointmentController::class, 'edit'])->name('appointment.edit');
            Route::put('/', [AppointmentController::class, 'update'])->name('appointment.update');
            Route::patch('/schedule', [AppointmentController::class, 'schedule'])->name('appointment.schedule');
            Route::delete('', [AppointmentController::class, 'index'])->name('appointment.destroy');
        });
    });
});
