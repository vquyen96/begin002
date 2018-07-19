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
    return view('welcome');
});



Route::group(['prefix'=>'class'], function(){
	Route::get('/', 'ClassController@getList');
	Route::get('add', 'ClassController@getAdd');
	Route::post('add', 'ClassController@postAdd');

	Route::get('edit/{id}', 'ClassController@getEdit');
	Route::post('edit/{id}', 'ClassController@postEdit');

	Route::get('delete/{id}', 'ClassController@getDelete');

	Route::get('detail/{id}', 'StudentController@getList');
	Route::get('detail/{id}/add', 'StudentController@getAdd');
	Route::post('detail/{id}/add', 'StudentController@postAdd');

	Route::get('detail/{id_class}/edit/{id_stu}', 'StudentController@getEdit');
	Route::post('detail/{id_class}/edit/{id_stu}', 'StudentController@postEdit');
	Route::get('detail/{id_class}/delete/{id_stu}', 'StudentController@getDelete');

});