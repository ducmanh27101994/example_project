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

Route::prefix('/')->group(function () {
    Route::get('/contact', 'App\Http\Controllers\TemplateController@contact');
    Route::get('/list-store', 'App\Http\Controllers\TemplateController@listStore');
    Route::get('/near-by-store', 'App\Http\Controllers\TemplateController@nearbyStore');
    Route::get('/category-product', 'App\Http\Controllers\TemplateController@categoryProduct');
    Route::get('/details-basic', 'App\Http\Controllers\TemplateController@detailsBasic');
    //    Route::get('/account/login', 'App\Http\Controllers\TemplateController@login');
    //    Route::get('/account/register', 'App\Http\Controllers\TemplateController@register');
    //    Route::get('/about-us', 'App\Http\Controllers\TemplateController@aboutus');
    //    Route::get('/category-news', 'App\Http\Controllers\TemplateController@categoryNews');
    //    Route::get('/details', 'App\Http\Controllers\TemplateController@detailsNews');
});

Route::prefix('/template')->group(function () {
    Route::get('/listItemProduct', 'App\Http\Controllers\TemplateController@listProductAdmin');
    Route::get('/createItemProduct', 'App\Http\Controllers\TemplateController@createProductAdmin');
});


Route::get('', 'App\Http\Controllers\HomePageController@indexHomePage')->name('home.page');


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
        Route::get('/configOption', 'App\Http\Controllers\Admin\ConfigController@indexConfigOption')->name('admin.config.option');
        Route::post('/update-status', 'App\Http\Controllers\Admin\ConfigController@updateChecked');

        Route::get('/listMenu', 'App\Http\Controllers\Admin\MenuController@indexListMenu')->name('admin.indexListMenu');
        Route::get('/createMenu', 'App\Http\Controllers\Admin\MenuController@indexCreateMenu')->name('admin.indexCreateMenu');
        Route::post('/createMenu', 'App\Http\Controllers\Admin\MenuController@createMenu')->name('admin.submit.indexCreateMenu');
        Route::get('/editMenu/{id}', 'App\Http\Controllers\Admin\MenuController@editMenu')->name('admin.editMenu');
        Route::post('/editMenu/{id}', 'App\Http\Controllers\Admin\MenuController@submitEditMenu')->name('admin.submit.editMenu');

        Route::get('/listCategory', 'App\Http\Controllers\Admin\CategoryController@indexListCategory')->name('admin.indexListCategory');
        Route::get('/createCategory', 'App\Http\Controllers\Admin\CategoryController@indexCreateCategory')->name('admin.indexCreateCategory');
        Route::post('/createCategory', 'App\Http\Controllers\Admin\CategoryController@createCategory')->name('admin.submit.indexCreateCategory');
        Route::get('/editCategory/{id}', 'App\Http\Controllers\Admin\CategoryController@editCate')->name('admin.editCate');
        Route::post('/editCategory/{id}', 'App\Http\Controllers\Admin\CategoryController@submitEditCate')->name('admin.submit.editCate');
        Route::get('/listBlog', 'App\Http\Controllers\Admin\CategoryController@indexListBlog')->name('admin.indexListBlog');
        Route::get('/createBlog', 'App\Http\Controllers\Admin\CategoryController@createBlog')->name('admin.createBlog');
        Route::post('/createBlog', 'App\Http\Controllers\Admin\CategoryController@submitCreateBlog')->name('admin.submit.createBlog');
        Route::get('/editBlog/{id}', 'App\Http\Controllers\Admin\CategoryController@editBlog')->name('admin.editBlog');
        Route::post('/editBlog/{id}', 'App\Http\Controllers\Admin\CategoryController@submitEditBlog')->name('admin.submit.editBlog');

        Route::get('/indexContact', 'App\Http\Controllers\Admin\ContactController@indexContact')->name('admin.indexContact');
        Route::get('/indexContact/{id}', 'App\Http\Controllers\Admin\ContactController@editContact')->name('admin.editContact');
        Route::post('/indexContact/{id}', 'App\Http\Controllers\Admin\ContactController@submitStatusContact')->name('admin.submit.editContact');

        Route::get('/indexMap', 'App\Http\Controllers\Admin\SettingController@indexMap')->name('admin.indexMap');
        Route::post('/indexMap', 'App\Http\Controllers\Admin\SettingController@submitConfigMap')->name('admin.submit.indexMap');
        Route::get('/indexSeo', 'App\Http\Controllers\Admin\SettingController@indexSeo')->name('admin.indexSeo');
        Route::post('/indexSeo', 'App\Http\Controllers\Admin\SettingController@submitConfigSeo')->name('admin.submit.indexSeo');
        Route::get('/indexAnalytics', 'App\Http\Controllers\Admin\SettingController@indexAnalytics')->name('admin.indexAnalytics');
        Route::post('/indexAnalytics', 'App\Http\Controllers\Admin\SettingController@submitConfigAnalytics')->name('admin.submit.indexAnalytics');
        Route::get('/indexFanpage', 'App\Http\Controllers\Admin\SettingController@indexFanpage')->name('admin.indexFanpage');
        Route::post('/indexFanpage', 'App\Http\Controllers\Admin\SettingController@submitConfigFanpage')->name('admin.submit.indexFanpage');
        Route::get('/indexLiveChat', 'App\Http\Controllers\Admin\SettingController@indexLiveChat')->name('admin.indexLiveChat');
        Route::post('/indexLiveChat', 'App\Http\Controllers\Admin\SettingController@submitConfigLiveChat')->name('admin.submit.indexLiveChat');
        Route::get('/indexMastertools', 'App\Http\Controllers\Admin\SettingController@indexMastertools')->name('admin.indexMastertools');
        Route::post('/indexMastertools', 'App\Http\Controllers\Admin\SettingController@submitConfigMastertools')->name('admin.submit.indexMastertools');
        Route::get('/indexSocial', 'App\Http\Controllers\Admin\SettingController@indexSocial')->name('admin.indexSocial');
        Route::post('/indexSocial', 'App\Http\Controllers\Admin\SettingController@submitConfigSocial')->name('admin.submit.indexSocial');
        Route::get('/indexAfterBody', 'App\Http\Controllers\Admin\SettingController@indexAfterBody')->name('admin.indexAfterBody');
        Route::post('/indexAfterBody', 'App\Http\Controllers\Admin\SettingController@submitConfigAfterBody')->name('admin.submit.indexAfterBody');
        Route::get('/indexBeforeBody', 'App\Http\Controllers\Admin\SettingController@indexBeforeBody')->name('admin.indexBeforeBody');
        Route::post('/indexBeforeBody', 'App\Http\Controllers\Admin\SettingController@submitConfigBeforeBody')->name('admin.submit.indexBeforeBody');

        Route::get('/indexStaticPage', 'App\Http\Controllers\Admin\IndependentContentController@indexStaticPage')->name('admin.indexStaticPage');
        Route::get('/createStaticPage', 'App\Http\Controllers\Admin\IndependentContentController@createStaticPage')->name('admin.createStaticPage');
        Route::post('/createStaticPage', 'App\Http\Controllers\Admin\IndependentContentController@submitStaticPage')->name('admin.submit.createStaticPage');
        Route::get('/editStaticPage/{id}', 'App\Http\Controllers\Admin\IndependentContentController@editStaticPage')->name('admin.editStaticPage');
        Route::post('/editStaticPage/{id}', 'App\Http\Controllers\Admin\IndependentContentController@submitEditStaticPage')->name('admin.submit.editStaticPage');

        Route::get('/indexBannerAds', 'App\Http\Controllers\Admin\BannerAdsController@indexBannerAds')->name('admin.indexBannerAds');
        Route::get('/createBannerAds', 'App\Http\Controllers\Admin\BannerAdsController@createBannerAds')->name('admin.createBannerAds');
        Route::post('/createBannerAds', 'App\Http\Controllers\Admin\BannerAdsController@submitBannerAds')->name('admin.submit.createBannerAds');
        Route::get('/editBannerAds/{id}', 'App\Http\Controllers\Admin\BannerAdsController@editBannerAds')->name('admin.editBannerAds');
        Route::post('/editBannerAds/{id}', 'App\Http\Controllers\Admin\BannerAdsController@submitEditBannerAds')->name('admin.submit.editBannerAds');

        Route::get('/indexStore', 'App\Http\Controllers\Admin\StoreController@indexStore')->name('admin.indexStore');
        Route::get('/createStore', 'App\Http\Controllers\Admin\StoreController@createStore')->name('admin.createStore');
        Route::post('/createStore', 'App\Http\Controllers\Admin\StoreController@submitStore')->name('admin.submitStore');
        Route::get('/editStore/{id}', 'App\Http\Controllers\Admin\StoreController@editStore')->name('admin.editStore');
        Route::post('/editStore/{id}', 'App\Http\Controllers\Admin\StoreController@submitEditStore')->name('admin.submit.editStore');

        Route::get('/indexListCateProduct', 'App\Http\Controllers\Admin\CategoryController@indexListCategoryProduct')->name('admin.list.cate.product');
        Route::get('/createCateProduct', 'App\Http\Controllers\Admin\CategoryController@createCategoryProduct')->name('admin.create.cate.product');
        Route::post('/createCateProduct', 'App\Http\Controllers\Admin\CategoryController@submitCreateCategoryProduct')->name('admin.submit.cate.product');
        Route::get('/editCateProduct/{id}', 'App\Http\Controllers\Admin\CategoryController@editCategoryProduct')->name('admin.edit.cate.product');
        Route::post('/editCateProduct/{id}', 'App\Http\Controllers\Admin\CategoryController@submitEditCategoryProduct')->name('admin.edit.submit.cate.product');
    });
});

Route::get('/login_customer', 'App\Http\Controllers\Customer\AuthController@indexLogin')->name('customer.login');
Route::post('/submit_register', 'App\Http\Controllers\Customer\AuthController@registerSubmit')->name('submit.register.customer');
Route::post('/submitLogin', 'App\Http\Controllers\Customer\AuthController@submitLogin')->name('submit.login.customer');
Route::get('/logoutCustomer', 'App\Http\Controllers\Customer\AuthController@logoutCustomer')->name('submit.logout.customer');
Route::post('/indexContactSubmit', 'App\Http\Controllers\Admin\ContactController@submitEmailContact')->name('admin.contact.submit');

Route::get('/about-us', 'App\Http\Controllers\HomePageController@indexAboutUs')->name('home.about-us');
Route::get('/category-news', 'App\Http\Controllers\HomePageController@listCategory')->name('page.category');
Route::get('/detail-blog/{slug}', 'App\Http\Controllers\HomePageController@detailBlog')->name('page.blog');
Route::post('/submit-contact-form', 'App\Http\Controllers\Admin\ContactController@submitContactForm')->name('submit.contact.form');

Route::get('/category-list/{id}', 'App\Http\Controllers\HomePageController@listCategoryDetail')->name('page.category.list');
