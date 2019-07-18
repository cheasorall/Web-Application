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
// Route::get('admin', 'home');
// Route::get('cards.blade');

Route::get('/displayStudents', function(){
    return view('displayStudents');
});

Route::get('/displayAttendances', function(){
    return view('displayAttendances');
});

Route::get('/displayCourses', function(){
    return view('displayCourses');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){

    Route::get('/course/create', [
        'uses' => 'CoursesController@create',
        'as' => 'course.create'
    ]);

    Route::get('/courses', [
        'uses' => 'CoursesController@index',
        'as' => 'courses'
    ]);
    
    Route::post('/course/store', [
        'uses' => 'CoursesController@store',
        'as' => 'course.store'
    ]);

    Route::get('/course/edit/{id}', [
        'uses' => 'CoursesController@edit',
        'as' => 'course.edit'
    ]);

    Route::get('/course/delete/{id}', [
        'uses' => 'CoursesController@delete',
        'as' => 'course.delete'
    ]);

    Route::post('/course/update/{id}', [
        'uses' => 'CoursesController@update',
        'as' => 'course.update'
    ]);

});


