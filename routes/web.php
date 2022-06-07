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
Route::post("app/loginProcess", 'AuthWebController@loginProcess')->name("app.loginProcess");
Route::post("app/registerProcess", 'AuthWebController@customRegistration')->name("app.registerProcess");


Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function(){
    Route::get('/', function () {
        return view('auth.login');
    });
    Route::get('/search', 'HomeController@search')->name("search.all.site");

    Route::prefix('app')->name('app.')->group(function () {
        Route::get('/home', 'HomeController@index')->name("home");
        Route::get('/categories/{id}', 'CategoryController@index')->name("categories");
        Route::get('/product/{id}', 'ProductController@index')->name("product");
      /********TEST*************/
        Route::get('/product/offers', 'ProductController@index')->name("product.discount");

        /********TEST*************/

        Route::get('/settings', 'SettingController@about')->name("settings");

        Route::get('cart', 'ProductController@cart')->name('cart');
        Route::post('add-to-cart','ProductController@addtocart');
        Route::post('addShippingAddress','ProductController@addShippingAddress');
        Route::get('/load-cart-data','ProductController@cartloadbyajax');
        Route::post('update-to-cart','ProductController@updatetocart');
        Route::delete('delete-from-cart','ProductController@deletefromcart');
        Route::get('clear-cart','ProductController@clearcart');
        Route::get('/submitOrder','ProductController@submitOrder')->name('submitOrder');

        Route::get('profile','ProfileController@profile')->name('profile');

        Route::get('cartAddress', 'ProductController@cartAddress')->name('cartAddress');
        Route::get('cartAddress/{shipping_id}', 'ProductController@cartAddress');

        Route::post('update-profile','ProfileController@updateProfile')->name('updateProfile');
       /****************last***************/
        Route::get('my_address/set?new', 'ProductController@newAddress');


    });
});

