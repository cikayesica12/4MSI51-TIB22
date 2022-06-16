<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Dashboard;
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

Route::get('/formrental/index', [FormrentalController::class, 'index'])->name('formrental.index');
Route::get('/formrental', [FormrentalController::class, 'create'])->name('formrental.create');
Route::post('/formrental/store', [FormrentalController::class, 'store'])->name('formrental.store');

Route::get('/listrental', [ListrentalController::class, 'index'])->name('listrental.index');
Route::get('/listrental/create', [ListrentalController::class, 'create'])->name('listrental.create');
Route::post('/listrental/store', [ListrentalController::class, 'store'])->name('listrental.store');

Route::get('/login', [AuthController::class,"showLoginForm"])->name('showLoginForm');
Route::post('/login', [AuthController::class,"login"])->name('login');

/*Route Contact US Admin*/
Route::get('/contactusadmin', 'App\Http\Controllers\ContactusadminController@index');
Route::get('/contactusadmin/delete/{id}', 'App\Http\Controllers\ContactusadminController@delete_form');
Route::post('/create_form', 'App\Http\Controllers\ContactusController@create_form');

Route::get('/dashboard', [Dashboard::class,"index"])->name('dashboard.index');

Route::get('/contactus', function () {
    return view('layouts.user.contactus',[
        "title" => "Contact Us"
    ]);
});
Route::get('/', function () {
    return view('layouts.user.home',[
        "title" => "Home"
    ]);
});
Route::get('/info', function () {
    return view('layouts.user.info',[
        "title" => "Info"
    ]);
});
Route::get('/aboutus', function () {
    return view('layouts.user.aboutus',[
        "title" => "About Us"
    ]);
});