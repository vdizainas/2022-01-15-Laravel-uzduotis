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

Route::prefix('clients')->group(function() {
    Route::get('', 'App\Http\Controllers\ClientController@index')->name('clients.index');
    Route::get('create', 'App\Http\Controllers\ClientController@create')->name('clients.create');
    Route::get('edit', 'App\Http\Controllers\ClientController@edit')->name('clients.edit');
});

Route::prefix('companies')->group(function() {
    Route::get('', 'App\Http\Controllers\CompanyController@index')->name('companies.index');
    Route::get('create', 'App\Http\Controllers\CompanyController@create')->name('companies.create');
    Route::get('edit', 'App\Http\Controllers\CompanyController@edit')->name('companies.edit');
});