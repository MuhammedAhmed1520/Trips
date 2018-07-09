<?php
use Spatie\Sitemap\SitemapGenerator;

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


Auth::routes();


//for admin routes
Route::get('/admin','AdminController@index')->name('admin.dashboard');
Route::get('/admin/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login','Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/admin/logout','Auth\AdminLoginController@logout')->name('admin.logout');

//for category routes
Route::resource('/admin/category','categoryController');
Route::get('/admin/category/{id}/delete','categoryController@destroy');

// for managers routes
Route::resource('/admin/manager','managerController');
Route::get('/admin/manager/{id}/delete','managerController@destroy');


// for role routes
Route::resource('/admin/role','roleController');
Route::get('/admin/role/{id}/delete','roleController@destroy');

// for permission routes
Route::resource('/admin/permission','permissionController');
Route::get('/admin/permission/{id}/delete','permissionController@destroy');

// for managers routes
//Route::get('/admin','AdminController@index');


// Trip Route
Route::resource('/admin/trip','TripController');
Route::get('/admin/trip/{id}/delete','TripController@destroy');
Route::post('/admin/trip/photo/create','PhotoController@upload');
Route::post('/admin/trip/{id}/photo/delete','PhotoController@destroy');
Route::post('/admin/trip/{id}/mail','TripController@email');


//Slider Route
Route::resource('/admin/slider','SliderController');
Route::get('/admin/slider/{id}/delete','SliderController@destroy');

//Advantages Route
Route::resource('/admin/advantage','advantagesController');
Route::get('/admin/advantage/{id}/delete','advantagesController@destroy');

//Setting Route
Route::get('/admin/setting','settingController@index');
Route::post('/admin/setting','settingController@store');

//Bulid-trip
Route::get('/admin/bulid-trip','front\HomeController@bulidTripShow');
Route::get('/admin/bulid-trip/{id}/delete','front\HomeController@bulidTripDestroy');

//Transfer-trip
Route::get('/admin/transfer','front\HomeController@transferShow');
Route::get('/admin/transfer/{id}/delete','front\HomeController@transferDestroy');



Route::get('/user/logout','Auth\LoginController@userlogout')->name('user.logout');



/**
 *  Front Route
 */
//ini_set('memory_limit','256M');


Auth::routes();


//for user routes
Route::get('/home', 'front\HomeController@index')->name('home');
Route::post('/home/subscribe', 'front\HomeController@subscribe');
//SiteMap
Route::get('/home/site-map', function (){

    SitemapGenerator::create('http://localhost/icetrips/home')->writeToFile('sitemap.xml');
    return "SiteMap Created";
});
Route::get('/home/{url_slug}/book', 'front\HomeController@bookTrip');
Route::post('/home/{url_slug}/book', 'front\HomeController@bookTripStore');
Route::get('/home/transfer', 'front\HomeController@transfer');
Route::get('/refresh_captcha', 'front\HomeController@refreshCaptcha')->name('refresh_captcha');
Route::post('/home/transfer', 'front\HomeController@transferStore');
Route::get('/home/bulid-trip', 'front\HomeController@buildTrip');
Route::post('/home/bulid-trip/store', 'front\HomeController@buildTripStore');


Route::get('/home/{url_slug}/{url_slug1?}', 'front\HomeController@getByCategory');
Route::post('/trip/loadtrip','front\HomeController@loadTrip' );
Route::get('/home/trip/{url_slug1}/{url_slug}', 'front\HomeController@trip');
Route::post('/review/loadreview','front\HomeController@loadReview' );

Route::post('/home/trip/{url_slug1}/{url_slug}', 'front\HomeController@review');
