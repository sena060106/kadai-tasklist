<?php


Route::group(['middleware' => ['auth']], function () {
 Route::get('/', 'TasksController@index');
 Route::resource('tasks', 'TasksController', ['only' => ['create','show','store','edit', 'update','destroy']]);
});

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

// ユーザ登録。。
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');