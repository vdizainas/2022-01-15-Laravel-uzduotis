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
    Route::get('', 'App\Http\Controllers\ClientController@index')->name('client.index');
    Route::get('create', 'App\Http\Controllers\ClientController@create')->name('client.create');    
    
    // db
    Route::post('store', 'App\Http\Controllers\ClientController@store')->name('client.store');

    // update
    Route::get('edit/{client}', 'App\Http\Controllers\ClientController@edit')->name('client.edit');
    Route::post('update/{client}', 'App\Http\Controllers\ClientController@update')->name('client.update');

    // delete
    Route::post('destroy/{client}', 'App\Http\Controllers\ClientController@destroy')->name('client.destroy');

    // show
    Route::get('show/{client}', 'App\Http\Controllers\ClientController@show')->name('client.show');

});

Route::prefix('companies')->group(function() {
    Route::get('', 'App\Http\Controllers\CompanyController@index')->name('companies.index');
    Route::get('create', 'App\Http\Controllers\CompanyController@create')->name('companies.create');
    Route::get('edit', 'App\Http\Controllers\CompanyController@edit')->name('companies.edit');
    
    // db
    Route::post('store', 'App\Http\Controllers\CompanyController@store')->name('companies.store');
    
    // update
    Route::get('edit/{company}', 'App\Http\Controllers\CompanyController@edit')->name('companies.edit');
    Route::post('update/{company}', 'App\Http\Controllers\CompanyController@update')->name('companies.update');

    // delete
    Route::post('destroy/{company}', 'App\Http\Controllers\CompanyController@destroy')->name('companies.destroy');

    // show
    Route::get('show/{company}', 'App\Http\Controllers\CompanyController@show')->name('companies.show');
});