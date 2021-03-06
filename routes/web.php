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

Auth::routes();

//Route::get('/home', 'HomeController@index');

Route::resource('role','RoleController');

Route::resource('examtype','ExamTypeController');

Route::resource('booktype','BookTypeController');

Route::resource('user','UserController');

Route::resource('book','BookController');

Route::resource('version','VersionController');

Route::resource('attachment','AttachmentController');

Route::resource('subject','SubjectController');

Route::resource('log','LogController');

Route::resource('chart','ChartController');
