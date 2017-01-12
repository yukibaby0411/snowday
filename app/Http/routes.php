<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

get('/home', 'StaticPagesController@home')->name('home');
get('/help', 'StaticPagesController@help')->name('help');
get('/about', 'StaticPagesController@about')->name('about');

resource('users', 'UsersController');
/*
get('/users', 'UsersController@index')->name('users.index');  //显示数据列表
get('/users/{id}', 'UsersController@show')->name('users.show');  //显示单条数据
get('/users/create', 'UsersController@create')->name('users.create');  //添加数据的页面
post('/users', 'UsersController@store')->name('users.store');  //添加数据操作
get('/users/{id}/edit', 'UsersController@edit')->name('users.edit');  //更新数据的页面
patch('/users/{id}', 'UsersController@update')->name('users.update');  //更新数据操作
delete('/users/{id}', 'UsersController@destroy')->name('users.destroy');  //删除数据操作
*/

get('/login/{from?}', 'SessionsController@create')->name('login');
post('/login', 'SessionsController@store')->name('login');
delete('/logout', 'SessionsController@destroy')->name('logout');
