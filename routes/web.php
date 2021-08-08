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
    return view('news');
})->name('news');

//Auth::routes();

Route::get ('/', 'newsController@allData')->name('news-data');
Route::get ('/news/{id}', 'newsController@ShowOneNews')->name('News-One');



