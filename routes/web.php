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
Route::get('page/trangchu','myController@trangchu');

Route::get('trangchu',function(){
    return view('trangchu');
});
Route::get('sanpham','myController@product');
Route::get('dangky',function ()
{
    return view('page.sign_in');
});
Auth::routes();

Route::get('/home', 'HomeController@index');

