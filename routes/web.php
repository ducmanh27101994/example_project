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

Route::prefix('/admin')->group(function () {
    Route::get('/', 'App\Http\Controllers\TemplateController@example');
    Route::get('/login', 'App\Http\Controllers\TemplateController@login');
    Route::get('/dashboard', 'App\Http\Controllers\TemplateController@dashboard');
    Route::get('/account', 'App\Http\Controllers\TemplateController@account');
    Route::get('/create-new-account', 'App\Http\Controllers\TemplateController@createAccount');
    Route::get('/cau-hinh-chung', 'App\Http\Controllers\TemplateController@generalConfig');
    Route::get('/banner-chan-trang', 'App\Http\Controllers\TemplateController@bannerAndFooter');
    Route::get('/main-menu', 'App\Http\Controllers\TemplateController@mainmenu');
    Route::get('/them-menu', 'App\Http\Controllers\TemplateController@addmenu');
    /*****new module*/
    Route::get('/danh-muc-tin-tuc', 'App\Http\Controllers\TemplateController@categoryBlog');
    Route::get('/them-danh-muc-tin-tuc', 'App\Http\Controllers\TemplateController@addNewCategoryBlog');
    Route::get('/danh-sach-tin-tuc', 'App\Http\Controllers\TemplateController@item');
    Route::get('/them-tin-tuc', 'App\Http\Controllers\TemplateController@addNewItemBlog');
    Route::get('/danh-sach-lien-he', 'App\Http\Controllers\TemplateController@contact');
    Route::get('/chi-tiet-lien-he', 'App\Http\Controllers\TemplateController@contactDetails');
    Route::get('/map', 'App\Http\Controllers\TemplateController@map');
    Route::get('/tich-hop-seo', 'App\Http\Controllers\TemplateController@tichhopseo');
    Route::get('/tich-hop-analytics', 'App\Http\Controllers\TemplateController@tichhopanalytics');
    Route::get('/tich-hop-fanpage', 'App\Http\Controllers\TemplateController@tichhopfanpage');
    Route::get('/tich-hop-livechat', 'App\Http\Controllers\TemplateController@tichhoplivechat');
    Route::get('/tich-hop-mastertools', 'App\Http\Controllers\TemplateController@tichhopmastertools');
    Route::get('/tich-hop-social', 'App\Http\Controllers\TemplateController@tichhopsocial');
    Route::get('/tich-hop-afterBody', 'App\Http\Controllers\TemplateController@tichhopAfterBody');
    Route::get('/tich-hop-beforeBody', 'App\Http\Controllers\TemplateController@tichhopBeforeBody');
    Route::get('/noi-dung-doc-lap', 'App\Http\Controllers\TemplateController@tienichSingleContent');
    Route::get('/them-noi-dung-doc-lap', 'App\Http\Controllers\TemplateController@tienichAddContentSingle');
    Route::get('/quan-ly-quang-cao', 'App\Http\Controllers\TemplateController@tienichAdvs');
    Route::get('/vi-tri-quang-cao', 'App\Http\Controllers\TemplateController@tienichAdvsPosition');
    Route::get('/danh-muc-cua-hang', 'App\Http\Controllers\TemplateController@cuahangCate');
    Route::get('/them-danh-muc-cua-hang', 'App\Http\Controllers\TemplateController@cuahangAddCate');
    Route::get('/danh-sach-cua-hang', 'App\Http\Controllers\TemplateController@cuahangItem');
    Route::get('/them-vi-tri-cua-hang', 'App\Http\Controllers\TemplateController@cuahangAddItem');
    /*******End*/
});


Route::get('/login', 'App\Http\Controllers\Admin\UserController@login')->name('admin.login');
Route::post('/login', 'App\Http\Controllers\Admin\UserController@employee_login')->name('admin.submit.login');
Route::get('/logout', 'App\Http\Controllers\Admin\UserController@logout')->name('admin.submit.logout');

Route::group(['middleware' => 'auth_admin'], function () {
    Route::prefix('/admin')->group(function () {
        Route::get('/', 'App\Http\Controllers\Admin\DashboardController@indexDashboard')->name('admin.dashboard');
        Route::get('/dashboard', 'App\Http\Controllers\Admin\DashboardController@indexDashboard')->name('admin.dashboard');
        Route::get('/account', 'App\Http\Controllers\Admin\UserController@indexAccount')->name('admin.account');
        Route::get('/createAccount', 'App\Http\Controllers\Admin\UserController@indexCreateAccount')->name('admin.createAccount');
        Route::post('/createAccount', 'App\Http\Controllers\Admin\UserController@submitCreateAccount')->name('admin.submit.createAccount');
        Route::get('/editAccount/{id}', 'App\Http\Controllers\Admin\UserController@edit_employee')->name('admin.editAccount');
        Route::post('/editAccount/{id}', 'App\Http\Controllers\Admin\UserController@update_employee')->name('admin.submit.editAccount');

        Route::get('/generalConfig', 'App\Http\Controllers\Admin\ConfigController@indexConfig')->name('admin.generalConfig');
        Route::post('/generalConfig', 'App\Http\Controllers\Admin\ConfigController@submitConfig')->name('admin.submit.generalConfig');
        Route::get('/bannerAndFooter', 'App\Http\Controllers\Admin\ConfigController@indexConfigImages')->name('admin.bannerAndFooter');
        Route::post('/bannerAndFooter', 'App\Http\Controllers\Admin\ConfigController@submitConfigImages')->name('admin.submit.bannerAndFooter');

        Route::get('/listMenu', 'App\Http\Controllers\Admin\MenuController@indexListMenu')->name('admin.indexListMenu');
        Route::get('/createMenu', 'App\Http\Controllers\Admin\MenuController@indexCreateMenu')->name('admin.indexCreateMenu');
        Route::post('/createMenu', 'App\Http\Controllers\Admin\MenuController@createMenu')->name('admin.submit.indexCreateMenu');
        Route::get('/editMenu/{id}', 'App\Http\Controllers\Admin\MenuController@editMenu')->name('admin.editMenu');
        Route::post('/editMenu/{id}', 'App\Http\Controllers\Admin\MenuController@submitEditMenu')->name('admin.submit.editMenu');
    });
});
