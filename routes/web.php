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




Route::get('/home', 'HomeController@index')->name('home');
Route::resource('user', 'UserController', [
    'names' => [
        'index' => 'user',
        'store' => 'user.new',
    ]
]);
Route::resource('role', 'RoleController', [
    'names' => [
        'index' => 'role',
        'store' => 'role.new',

    ]
]);
