<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('admin')->as('admin.')->middleware(['auth', 'permissions'])->group(function () {
    Route::get('/', 'Admin\\AdminController@index')->name('index');
    Route::get('/dashboard', 'Admin\\AdminController@dashboard')->name('dashboard');
    Route::resource('permission', 'Admin\\PermissionController');
    Route::resource('role', 'Admin\\RoleController');
    Route::resource('user', 'Admin\\UserController');
    Route::prefix('account')->as('account.')->group(function () {
        Route::get('/', 'Admin\\AccountController@index')->name('index');
        Route::post('biography', 'Admin\\AccountController@biography')->name('biography');
        Route::post('email', 'Admin\\AccountController@email')->name('email');
        Route::post('password', 'Admin\\AccountController@password')->name('password');
    });
});
