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

Route::prefix('/template')->group(function () {
    Route::get('/', 'App\Http\Controllers\TemplateController@example');
    Route::get('/login', 'App\Http\Controllers\TemplateController@login');
    Route::get('/dashboard', 'App\Http\Controllers\TemplateController@dashboard');
    Route::get('/account', 'App\Http\Controllers\TemplateController@account');
    Route::get('/create-new-account', 'App\Http\Controllers\TemplateController@createAccount');
    Route::get('/cau-hinh-chung', 'App\Http\Controllers\TemplateController@generalConfig');
    Route::get('/banner-chan-trang', 'App\Http\Controllers\TemplateController@bannerAndFooter');
    Route::get('/main-menu', 'App\Http\Controllers\TemplateController@mainmenu');
    Route::get('/them-menu', 'App\Http\Controllers\TemplateController@addmenu');
});
