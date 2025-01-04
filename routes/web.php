<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BuyerController;
use App\Http\Controllers\Auth\RegisterController;


Route::get('/', function () {
    return view('index');
})->name('index');


Auth::routes();


Route::middleware(['auth'])->group(function () {


    Route::get('/dashboard', function () {
        $role = auth()->user()->role;
        if ($role === 'admin') {
            return redirect()->route('admin.dashboard');
        } elseif ($role === 'buyer') {
            return redirect()->route('buyer.dashboard');
        }
        abort(403, 'Unauthorized');
    })->name('dashboard');


    Route::prefix('admin')->middleware(['role:admin'])->group(function () {
        Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    });


    Route::prefix('buyer')->middleware(['role:buyer'])->group(function () {
        Route::get('/dashboard', [BuyerController::class, 'index'])->name('buyer.dashboard');
    });
});


Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.post');
