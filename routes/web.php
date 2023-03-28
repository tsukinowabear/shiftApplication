<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShiftController;
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
    Route::get('/shifts/desired','index')->name('desired');
    Route::get('/shifts/desired/create','apply')->name('apply');
    Route::get('/shifts/desired/{shift}','show')->name('show');
    Route::get('/shifts/desired/{shift}/edit','edit')->name('edit');
    Route::put('/shifts/desired/{shift}','update')->name('update');
    Route::post('/shifts/desired','store')->name('store');
    Route::delete('/shifts/desired/{shift}','delete')->name('delete');
});

Route::controller(ConfirmedShiftController::class)->middleware(['auth'])->group(function(){
    Route::get('/shifts/confirm','index')->name('confirm');
    Route::get('/shifts/confirm/desired','select')->name('select');
    Route::get('/shifts/confirm/create','create')->name('create');
    Route::get('/shifts/confirm/desired/{shift}','candidate')->name('candidate');
    Route::get('/shifts/confirm/desired/{shift}/create','decision')->name('decision');
    Route::get('/shifts/confirm/{shift}','show')->name('show');
    Route::get('/shifts/confirm/{shift}/edit','edit')->name('edit');
    Route::put('/shifts/confirm/{shift}','update')->name('update');
    Route::post('/shifts/confirm','create_store')->name('create_store');
    Route::post('/shifts/confirm{shift}','candidate_store')->name('candidate_store');
    Route::delete('/shifts/confirm/{shift}','delete')->name('delete');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
