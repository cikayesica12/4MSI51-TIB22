<?php

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

// Route::get('/formrental', function(){
//     return view('layouts.user.formrental',  [
//         "title" => "Form Rental"
//     ]);
// });

Route::get('/formrental', [FormrentalController::class, 'create'])->name('formrental.create');
Route::post('/formrental/store', [FormrentalController::class, 'store'])->name('formrental.store');

Route::get('/listrental', [ListrentalController::class, 'index'])->name('listrental.index');

