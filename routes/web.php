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
    return view('homepage');
});
Route::get('/barbecue', function () {
    return view('pages/barbecue');
});
Route::get('/fer_barghi', function () {
    return view('pages/fer_barghi');
});
Route::get('/lebasshoui', function () {
    return view('pages/lebasshoui');
});
Route::get('/ojaq_gaz', function () {
    return view('pages/ojaq_gaz');
});
Route::get('/refrigerator', function () {
    return view('pages/refrigerator');
});
Route::get('/zarfshoui', function () {
    return view('pages/zarfshoui');
});
Route::get('/order/{name}', 'OrderController@order')->name('order');
Route::post('/order/save','OrderController@save')->name('order.save');
