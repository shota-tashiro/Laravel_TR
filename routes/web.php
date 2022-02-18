<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\TopPageController::class, 'top_page'])->name('top_page');

Auth::routes();


//ログイン画面//
//認証後
Route::get('/home', [\App\Http\Controllers\HomeController::class, 'home'])->name('home');


//ホーム画面//
//社員管理ボタン押下→社員管理画面
Route::get('/employeeManege', [\App\Http\Controllers\EmployeeManegeController::class, 'showEmployeeManegeMenu'])->name('showEmployeeManegeMenu');
//会議室予約ボタン押下→
Route::get('/calendar', [\App\Http\Controllers\ReserveController::class, 'calendar'])->name('calendar');
//議事録ボタン押下→議事録メニュー画面


Route::resource('/users', \App\Http\Controllers\UserController::class)->middleware('auth');


Route::get('/roles', [\App\Http\Controllers\RoleController::class,'get_role_list'])->name('roles.list')->middleware('auth');

Route::get('/reserve', [\App\Http\Controllers\ReserveController::class, 'show'])->name('show');

Route::POST('/reserve', [\App\Http\Controllers\ReserveController::class, 'store'])->name('store');