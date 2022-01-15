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
Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function(){
    // Dashboard
    Route::prefix('dashboard')->name('dashboard.')->middleware(['auth:admins'])->group(function(){
        // Home Page
      Route::get('home','HomeController@index')->name("home");
        //Logout
        Route::post("logout", 'AuthDashboardController@logout')->name("logout");

        //Categories Route
        Route::resource('categories', 'CategoryController');

        //Sub Categories Route
        Route::resource('sub_categories', 'SubCategoryController');

        //Countries Route
        Route::resource('countries', 'CountryController');

        //Cities Route
        Route::resource('cities', 'CityController');
        
        //Amenities Route
        Route::resource('amenities', 'AmenityController');



    });




});
