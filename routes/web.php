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
    Route::get('{student}/marks/edit', 'StudentMarkController@edit')->name('edit');
    Route::put('{student}/marks/update', 'StudentMarkController@update')->name('update');
});

