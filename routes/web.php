<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ThemeController;
use Illuminate\Support\Facades\Route;





Route::controller(ThemeController::class)->name('theme.')->group(function (){

    Route::get('/','index')->name('index');
    Route::get('/app','app')->name('app');
    Route::get('/tv','tv')->name('tv');
    Route::get('/aboute','aboute')->name('aboute');
    Route::get('/show','show')->name('show');


});

















Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
