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
// Authentication Routes...
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');
    //password reset
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

Route::middleware(['auth:web'])->group(function () {
    Route::get('/', function () {
        return view('home');
    });
    //**************************//
    Route::get('/movie','MovieController@index');
    Route::get('/movie/create','MovieController@create');
    Route::post('/movie/store','MovieController@store');
    Route::get('/movie/{id}','MovieController@show');
    Route::get('/movie/edit/{id}','MovieController@edit');
    Route::post('/movie/update/{id}','MovieController@update');
    Route::post('/movie/delete/{id}','MovieController@destroy');
    //Route::get('/movie/delete/{id}','MovieController@delete');
    //end movie route list************************************8

    Route::get('/hall','HallController@index');
    Route::get('/hall/create','HallController@create');
    Route::post('/hall/store','HallController@store');
    Route::get('hall/{id}','HallController@show');
    Route::get('hall/edit/{id}','HallController@edit');
    Route::post('hall/update/{id}','HallController@update');
    Route::post('/hall/delete/{id}','HallController@destroy');

    // hall section ********************************************

    Route::get('/seat','SeatController@index');
    Route::get('seat/create','SeatController@create');
    Route::post('seat/store','SeatController@store');
    Route::get('seat/{id}','SeatController@show');
    Route::get('seat/edit/{id}','SeatController@edit');
    Route::post('seat/update/{id}','SeatController@update');
    Route::post('/seat/delete/{id}','SeatController@destroy');
    //seat route call section*************************************************

    Route::get('/show','ShowController@index');
    Route::get('/show/create','ShowController@create');
    Route::post('/show/store','ShowController@store');
    Route::get('/show/{id}','ShowController@show');
    Route::get('/show/edit/{id}','ShowController@edit');
    Route::post('/show/update/{id}','ShowController@update');
    Route::post('/show/delete/{id}','ShowController@destroy');
    // show route**************************************************
    Route::get('/','HomeController@home')->name('home');
    Route::get('/', 'HomeController@index')->name('home');
   // Route::get('/page','BookingShowController@page');
    //Route::get('/page/show/{id}','BookingShowController@show');
    // **********************************8****************************
    Route::get('/booking','BookingController@index');
    Route::get('/booking/create','BookingController@create');
    Route::post('/booking/store','BookingController@store');
    Route::get('/booking/{id}','BookingController@show');
    Route::get('/booking/edit/{id}','BookingController@edit');
    Route::post('/booking/update/{id}','BookingController@update');
    Route::post('/booking/delete/{id}','BookingController@destroy');
    //Route::get('/booking/show/page','BookingController@page');
    // detail for booking
    Route::get('/booking/show/{id}/detail','BookingController@detail');
    Route::get('/booking/show/book','BookingController@book');
    //user 
    Route::get('/user','UserController@index');
    Route::get('/user/create','UserController@create')->name('user.create');
    Route::post('/user/store','UserController@store');
    Route::get('/user/edit/{id}','UserController@edit');
    Route::post('user/update/{id}','UserController@update');
    Route::post('/user/delete/{id}','UserController@destroy');

    // all data from db
    Route::get('/data','ReportdataController@data');
    Route::get('/data/pdf','ReportdataController@generatePDF');
    Route::get('/data/voucher','ReportdataController@voucher');
    Route::get('/data/inputvalue/voucher','ReportdataController@inputValue');
    // reports
    Route::get('/monthly/report', 'ReportController@monthly');
    
});
//Auth::routes();
