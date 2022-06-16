<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormrentalController;
use App\Http\Controllers\ListrentalController;


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

Route::get('/dashboard', function(){
    return view('layouts.admin.create-listrental');
});

Route::get('/formrental', [FormrentalController::class, 'create'])->name('formrental.create');
Route::post('/formrental/store', [FormrentalController::class, 'store'])->name('formrental.store');

Route::get('/listrental', [ListrentalController::class, 'index'])->name('listrental.index');
Route::get('/listrental/create', [ListrentalController::class, 'create'])->name('listrental.create');
Route::post('/listrental/store', [ListrentalController::class, 'store'])->name('listrental.store');

Route::get('/login', [AuthController::class,"showLoginForm"])->name('showLoginForm');
Route::post('/login', [AuthController::class,"login"])->name('login');