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
});
