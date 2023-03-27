<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DesiredShiftController;
use App\Http\Controllers\ConfirmedShiftController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(ShiftController::class)->middleware(['auth'])->group(function(){
    Route::get('/','index')->name('index');
});

Route::controller(DesiredShiftController::class)->middleware(['auth'])->group(function(){
    Route::get('/shifts/desire','desire')->name('desire');
    Route::get('/shifts/desire/create','apply')->name('apply');
    Route::get('/shifts/desire/{shift}','show')->name('show');
    Route::get('/shifts/desire/{shift}/edit','edit')->name('edit');
    Route::put('/shifts/desire/{shift}','update')->name('update');
    Route::post('/shifts/desire','store')->name('store');
    Route::delete('/shifts/desire/{shift}','delete')->name('delete');
});

Route::controller(ConfirmedShiftController::class)->middleware(['auth'])->group(function(){
    Route::get('/shifts/confirm','confirm')->name('confirm');
    Route::get('/shifts/desire/create','apply')->name('apply');
    Route::get('/shifts/desire/{shift}','show')->name('show');
    Route::get('/shifts/desire/{shift}/edit','edit')->name('edit');
    Route::put('/shifts/desire/{shift}','update')->name('update');
    Route::post('/shifts/desire','store')->name('store');
    Route::delete('/shifts/desire/{shift}','delete')->name('delete');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
