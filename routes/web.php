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
    return view('mains.index');
});


Route::get('/subjects' , 'subjectController@index');
Route::get('/subjects/java' , 'subjectController@java');
Route::get('/subjects/php' , 'subjectController@php');
Route::get('/subjects/web' , 'subjectController@web');
Route::get('/subjects/japanese' , 'subjectController@japanese');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('notices', 'NoticeController');
Route::resource('applies', 'ApplyController');
Route::resource('applySubjects', 'ApplySubjectController');
Route::get('/abouts', 'AboutController@index')->name('abouts.index');
Route::get('/abouts/kimschool', 'AboutController@kimschool')->name('abouts.kimschool');
Route::get('/abouts/teacher', 'AboutController@teacher')->name('abouts.teacher');

Route::get('/test', function(){
    return view('test');
});
