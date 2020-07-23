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

Route::resource('/groups', 'GroupController');
Route::resource('/subjects', 'SubjectController');
Route::resource('/students', 'StudentController');

Route::prefix('students')->name('marks.')->group(function () {
    Route::get('{student}/marks/create', 'StudentController@markCreate')->name('create');
    Route::post('{student}/marks/', 'StudentController@markStore')->name('store');
    Route::get('{student}/marks/edit/{subject}', 'StudentController@markEdit')->name('edit');
    Route::put('{student}/marks/edit/{subject}', 'StudentController@markUpdate')->name('update');
});

