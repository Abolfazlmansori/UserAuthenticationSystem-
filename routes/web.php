<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/* Get Pages */
Route::get('/',[PageController::class,'ShowHomePage'])->name('home');
Route::get('/register',[PageController::class,'ShowRegisterPage'])->name('register');
Route::get('/login',[PageController::class,'ShowLoginPage'])->name('login');
Route::get('/email-verify',[PageController::class,'ShowEmailVerifyPage'])->name('email.verify');


/* Post Actions */
Route::post('/Resister/Store',[AuthController::class, 'Register'])->name('Resister.Store');
Route::post('/Login/Store',[AuthController::class, 'Login'])->name('Login.Store');
Route::get('/Logout',[AuthController::class, 'Logout'])->name('Logout');
