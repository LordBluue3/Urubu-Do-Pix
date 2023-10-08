<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\ListUserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostNewController;
use App\Http\Controllers\RegisterController;


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

Route::get('/', [HomeController::class, 'show'])->name('home');

Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');

Route::get('/register', [RegisterController::class, 'show'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');


Route::prefix('/dashboard/user')->middleware(['auth:web'])->group(function(){
    Route::get('/', [IncomeController::class, 'show'])->name('dashboard.user');
    Route::get('/information', [InformationController::class, 'show'])->name('dashboard.user.information');
    
    
});
Route::prefix('/dashboard/admin')->middleware(['auth:admins'])->group(function(){
    Route::get('/', [ListUserController::class, 'show'])->name('dashboard.admin');
    Route::get('/posts', [PostNewController::class, 'show'])->name('dashboard.admin.posts');
    
});


