<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListUserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
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

/*Start Public Routes* */
Route::get('/', [HomeController::class, 'show'])->name('home');

Route::view('/login', 'login')->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');

Route::view('/register', 'register')->name('register');
Route::post('/register', [UserController::class, 'store'])->name('register.store');

/*End Public Routes* */

/*Start User Dashboard* */
Route::prefix('/dashboard/user')->middleware(['auth:web'])->group(function () {
    Route::view('/',  'dashboard.user.income')->name('dashboard.user');
    Route::view('/information', 'dashboard.user.information')->name('dashboard.user.information');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout.user');

});
Route::put('/dashboard/user/information', [UserController::class, 'updateInformation'])->name('dashboard.user.information.update');
Route::put('/dashboard/user/deposit', [UserController::class, 'updateMoney'])->name('dashboard.user.deposit.update');
/*End User Dashboard* */

/*Start Admin Dashboard* */
Route::prefix('/dashboard/admin')->middleware(['auth:admins'])->group(function () {
    Route::get('/', [ListUserController::class, 'show'])->name('dashboard.admin');
    Route::view('/posts', 'dashboard.admin.post-new')->name('dashboard.admin.posts');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout.admin');
    Route::post('/post', [PostController::class, 'store'])->name('admin.new.post');
    Route::get('/post', [PostController::class, 'show'])->name('admin.new.post.show');
    Route::get('/edit/post/{post}', [PostController::class, 'edit'])->name('admin.edit.post.show');

});
Route::put('/dashboard/admin/draw', [AdminController::class, 'update'])->name('dashboard.admin.draw.update');
Route::delete('/dashboard/admin/delete/{id}', [AdminController::class, 'delete'])->name('dashboard.admin.user.delete');
Route::delete('/dashboard/admin/post/delete/{post}', [PostController::class, 'delete'])->name('dashboard.admin.post.delete');
Route::put('/dashboard/admin/edit/post/{post}', [PostController::class, 'update'])->name('admin.edit.post.update');

/*End Admin Dashboard* */