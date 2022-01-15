<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [\App\Http\Controllers\TopPageController::class, 'top_page'])->name('top_page');

Auth::routes();



Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/users', [\App\Http\Controllers\UserController::class,'get_user_list'])->name('users.list')->middleware('auth');
Route::resource('/users', \App\Http\Controllers\UserController::class)->middleware('auth');


Route::get('/roles', [\App\Http\Controllers\RoleController::class,'get_role_list'])->name('roles.list')->middleware('auth');

Route::get('/calendar', [\App\Http\Controllers\ReserveController::class, 'calendar'])->name('calendar');

Route::get('/reserve', [\App\Http\Controllers\ReserveController::class, 'show'])->name('show');

Route::POST('/reserve', [\App\Http\Controllers\ReserveController::class, 'store'])->name('store');