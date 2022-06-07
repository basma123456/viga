<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "Dashboard" middleware group. Now create something great!
|
*/
//// Route Login Auth
Route::get("dashboard/login", 'AuthDashboardController@login')->name("dashboard.login");
Route::post("dashboard/loginProcess", 'AuthDashboardController@loginProcess')->name("dashboard.loginProcess");
// For Language
Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {
    // Dashboard
    Route::prefix('dashboard')->name('dashboard.')->middleware(['auth:admins'])->group(function () {
        // Home Page
        Route::get('home', 'OrderController@index')->name("home");  //test
        //Logout
        Route::post("logout", 'AuthDashboardController@logout')->name("logout");

        //Categories Route
        Route::resource('categories', 'CategoryController');

        //Sub Categories Route
        Route::resource('sub_categories', 'SubCategoryController');

        // Materials Route
        Route::resource('materials', 'MaterialController')->except(['show']);

        //Prices Route
        Route::resource('prices', 'PriceController')->except(['show', 'update']);
        Route::put('prices/update/{id}', 'PriceController@update')->name('prices.update');
        //Products Route
        Route::resource('products', 'ProductController');

        //Slider Route
        Route::resource('sliders', 'SliderController');

        //Section One Route
        Route::resource('SectionOne', 'SectionOneController');

        //Product Route
        Route::resource('products', 'ProductController');

        Route::get('/subcat/{id}', 'SubCategoryController@subCat')->name('subcat');

        //Route::get('/settings', 'SettingController@index')->name("settings");

        Route::resource('settings', 'SettingController');

        //orders
        Route::get('orders' , 'OrderController@index')->name('orders.show'); //test
        /***********************last**********/
        Route::post('delete/{id}', 'OrderController@deleteOrder')->name('delete.order');

    });
});
