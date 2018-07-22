<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => 'admin'], function () {

    Route::resource('Area', 'AreaController');
    Route::resource('Property', 'PropertyController');
    Route::get('admin/routes', 'HomeController@admin');
});


Route::group(['middleware' => 'auth'], function () {
    Route::get('user/routes', 'HomeController@user');
    Route::get('property_show/{id}','UserController@show');
    Route::get('wishlist/add/{id}', 'UserController@add_to_wishlist');
    Route::get('wishlist_view', 'UserController@view_wishlist');



    // Route::get('Area', 'AreaController');

});

Route::get('property_view', 'UserController@index');

