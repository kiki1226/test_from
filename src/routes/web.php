<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\Admin\AdminContactController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\LoginController;



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

// お問い合わせ画面関連のルーティング
Route::get('/inquiry', [InquiryController::class, 'index'])->name('inquiry.index');
Route::post('/inquiry/confirm', [InquiryController::class, 'confirm'])->name('inquiry.confirm');
Route::post('/inquiry/thanks', [InquiryController::class, 'store'])->name('inquiry.thanks');

// 管理画面関連のルーティング (プレフィックス 'admin')
Route::prefix('admin')->middleware('auth')->group(function () {
Route::get('/contacts', [AdminContactController::class, 'index'])->name('admin.contacts.index');
Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
Route::get('/contacts/create', [AdminContactController::class, 'create'])->name('admin.contacts.create');
Route::get('/contacts/{contact}/edit', [AdminContactController::class, 'edit'])->name('admin.contacts.edit');
Route::get('/contacts/{contact}', [AdminContactController::class, 'show'])->name('admin.contacts.show');
});

// 認証関連のルーティング
Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::get('/login/login', [LoginController::class, 'confirm'])->name('register');
Route::post('/login/login', [LoginController::class, 'register'])->name('login.login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');