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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'index');
Route::get('/create', 'StudentController@create');
Route::post('/store', 'StudentController@store');
Route::get('/index', 'StudentController@index');
Route::get('/show/{id}', 'StudentController@show');
Route::get('/edit/{id}', 'StudentController@edit');

Route::put('/update/{id}', 'StudentController@update');
Route::delete('/delete/{id}', 'StudentController@destroy');

//common route
Route::get('/common', 'CommonController@index');


//Teacher route

Route::name('teachers.')->group(function() {
    Route::get('/teachers/index', 'TeacherController@index')->name('index');
    Route::get('/teachers/create', 'TeacherController@create')->name('create');
    Route::post('/teachers/store', 'TeacherController@store')->name('store');
    Route::get('/teachers/edit/{teacherid}', 'TeacherController@edit')->name('edit');
    Route::post('/teachers/update/{teacherid}', 'TeacherController@update')->name('update');
    Route::delete('/teachers/delete/{teacherid}', 'TeacherController@destroy')->name('delete');
    

});

