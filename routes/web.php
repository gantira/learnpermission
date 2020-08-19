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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware('has.role')->prefix('xyz')->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');

    Route::prefix('role-and-permission')->namespace('Permissions')->group(function() {
        Route::get('roles', 'RoleController@index')->name('roles.index');
        Route::post('roles/store', 'RoleController@store')->name('roles.store');
        Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit');
        Route::put('roles/{role}', 'RoleController@update')->name('roles.update');
    });
});

Route::get('/home', 'HomeController@index')->name('home');
