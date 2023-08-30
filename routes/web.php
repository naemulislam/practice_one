<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\UserController;
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
Route::get('/login', [SigninController::class,'index'])->name('login');
Route::post('/login/store', [SigninController::class,'store'])->name('login.store');
Route::get('/logout', [SigninController::class,'logout'])->name('logout');
Route::get('/', [HomeController::class,'index'])->name('home');

Route::prefix('/dashboard')->middleware('auth')->group(function () {
    Route::get('/',[UserController::class,'index'])->name('dashboard');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
