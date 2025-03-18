<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\RegisterUserController;
=======
use Illuminate\Support\Facades\View;
>>>>>>> db31d84b0d6e4bd1c0583a812c970a889408a970

Route::get('/', function () {
    return view('index');
});

Route::get('dashboard', function () {
    return view('dash.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

<<<<<<< HEAD
require __DIR__.'/auth.php';
=======
Route::get('/dash/dashboard', function () {
    return view('/dash/dashboard');
});

Route::get('/register', function () {
    return view('/dash/register');
});
>>>>>>> db31d84b0d6e4bd1c0583a812c970a889408a970
