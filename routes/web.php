<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PermissionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;




Route::get('/', [HomeController::class, 'index'])->name('home');

Route::post('login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'signup'])->name('register');
Route::post('register', [AuthController::class, 'register'])->name('register');
Route::get('/newsfeed', [HomeController::class, 'newsfeed'])->name('newsfeed');

Route::resource('/users', UserController::class);
Route::resource('/roles', RoleController::class);
Route::resource('/permissions', PermissionController::class);
Route::resource('/products', ProductController::class);
Route::resource('/brands', BrandController::class);
Route::resource('/categories', CategoryController::class);




