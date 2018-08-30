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

Route::get('/', 'HomeController@index');
Route::get('/quran', 'HomeController@index')->name('quran.index');
Route::get('/quran/{slug}', 'HomeController@show')->name('quran.show');
Route::get('/quran/ayat/{slug}', 'HomeController@ayat')->name('quran.ayat.show');


Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function(){

      Route::get('/', 'DashboardController@index');

      Route::resource('kuran', 'SurasController');
      Route::get('kuran/{$slug}', 'SurasController@sura')->name('sura.show');
      Route::resource('ayats', 'AyatsController');
});
