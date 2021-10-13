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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Student routes

Route::prefix('students')->group(function () {

    Route::get('','StudentController@index')->name('student.index');
    Route::get('create', 'StudentController@create')->name('student.create');
    Route::post('store', 'StudentController@store')->name('student.store');
    Route::get('edit/{student}', 'StudentController@edit')->name('student.edit');
    Route::post('update/{student}', 'StudentController@update')->name('student.update');
    Route::post('delete/{student}', 'StudentController@destroy' )->name('student.destroy');
    Route::get('show/{student}', 'StudentController@show')->name('student.show');

});

//Student routes

Route::prefix('attendancegroups')->group(function () {

    Route::get('','AttendanceGroupController@index')->name('attendancegroup.index');
    Route::get('create', 'AttendanceGroupController@create')->name('attendancegroup.create');
    Route::post('store', 'AttendanceGroupController@store')->name('attendancegroup.store');
    Route::get('edit/{attendancegroup}', 'AttendanceGroupController@edit')->name('attendancegroup.edit');
    Route::post('update/{attendancegroup}', 'AttendanceGroupController@update')->name('attendancegroup.update');
    Route::post('delete/{attendancegroup}', 'AttendanceGroupController@destroy' )->name('attendancegroup.destroy');
    Route::get('show/{attendancegroup}', 'AttendanceGroupController@show')->name('attendancegroup.show');

});
