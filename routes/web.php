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

    Route::prefix('role-and-permission')->namespace('Permissions')->group(function () {
        Route::prefix('roles')->group(function () {
            Route::get('', 'RoleController@index')->name('roles.index');
            Route::post('store', 'RoleController@store')->name('roles.store');
            Route::get('{role}/edit', 'RoleController@edit')->name('roles.edit');
            Route::put('{role}', 'RoleController@update')->name('roles.update');
        });
        Route::prefix('permissions')->group(function () {
            Route::get('', 'PermissionController@index')->name('permissions.index');
            Route::post('store', 'PermissionController@store')->name('permissions.store');
            Route::get('{permission}/edit', 'PermissionController@edit')->name('permissions.edit');
            Route::put('{permission}', 'PermissionController@update')->name('permissions.update');
        });
    });
});

Route::get('/home', 'HomeController@index')->name('home');
