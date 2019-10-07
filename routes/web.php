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

Route::any('/index','IndexController@index');
Route::any('/add','IndexController@add');
Route::any('/delete','IndexController@delete');
Route::any('/update','IndexController@update');
Route::any('/update_do','IndexController@update_do');
Route::any('/del','IndexController@del');

Route::any('/model','ViewController@model');
Route::any('/register','IndexController@register');

Route::any('/register_do','IndexController@register_do');
Route::any('/login','IndexController@login');
Route::any('/login_do','IndexController@login_do');

Route::any('/','ShowController@show');
Route::any('/show','ShowController@show');
Route::any('/add_do','ShowController@add_do');

//=====电商======
//登录
Route::any('/buthlogin','Buth\ButhIndexController@buthlogin');
//注册
Route::any('/buthregist','Buth\ButhIndexController@buthregist');
Route::any('/buthregist_do','Buth\ButhIndexController@buthregist_do');
//显示商品页面
Route::any('/buthindex','Buth\ButhIndexController@buthindex');
//购物车
Route::any('/buthcart','Buth\ButhIndexController@buthcart');
//商品信息
Route::any('/buthexit','Buth\ButhIndexController@buthexit');
//产品列表
Route::any('/buthprolist','Buth\ButhIndexController@buthprolist');
//订单管理
Route::any('/buthorders','Buth\ButhIndexController@buthorders');
//购物车结算
Route::any('/buthinfo','Buth\ButhIndexController@buthinfo');

//考试
Route::any('/missadd','MissController@missadd');
Route::any('/missindex','MissController@missindex');
Route::any('/missexit','MissController@missexit');










Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
