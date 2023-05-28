<?php

use App\Http\Controllers\StudentController;
use App\Models\Student;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layouts.layout');
});

// Student routes
Route::resource('students',StudentController::class);
/*Route::get('/students', 'App\Http\Controllers\StudentController@index')->name('students.index');
Route::get('/students/create', 'App\Http\Controllers\StudentController@create')->name('students.create');
Route::post('/students', 'App\Http\Controllers\StudentController@store')->name('students.store');
Route::get('/students/{student}', 'App\Http\Controllers\StudentController@show')->name('students.show');
Route::get('/students/{student}/edit', 'App\Http\Controllers\StudentController@edit')->name('students.edit');
Route::put('/students/{student}', 'App\Http\Controllers\StudentController@update')->name('students.update');
Route::delete('/students/{student}', 'App\Http\Controllers\StudentController@destroy')->name('students.destroy');*/

// Course routes
Route::get('/courses', 'App\Http\Controllers\CourseController@index')->name('courses.index');
Route::get('/courses/create', 'App\Http\Controllers\CourseController@create')->name('courses.create');
Route::post('/courses', 'App\Http\Controllers\CourseController@store')->name('courses.store');
Route::get('/courses/{course}', 'App\Http\Controllers\CourseController@show')->name('courses.show');
Route::get('/courses/{course}/edit', 'App\Http\Controllers\CourseController@edit')->name('courses.edit');
Route::put('/courses/{course}', 'App\Http\Controllers\CourseController@update')->name('courses.update');
Route::delete('/courses/{course}', 'App\Http\Controllers\CourseController@destroy')->name('courses.destroy');

// Teacher routes
Route::get('/teachers', 'App\Http\Controllers\TeacherController@index')->name('teachers.index');
Route::get('/teachers/create', 'App\Http\Controllers\TeacherController@create')->name('teachers.create');
Route::post('/teachers', 'App\Http\Controllers\TeacherController@store')->name('teachers.store');
Route::get('/teachers/{teacher}', 'App\Http\Controllers\TeacherController@show')->name('teachers.show');
Route::get('/teachers/{teacher}/edit', 'App\Http\Controllers\TeacherController@edit')->name('teachers.edit');
Route::put('/teachers/{teacher}', 'App\Http\Controllers\TeacherController@update')->name('teachers.update');
Route::delete('/teachers/{teacher}', 'App\Http\Controllers\TeacherController@destroy')->name('teachers.destroy');

// User routes
/*Route::get('/users', 'App\Http\Controllers\UserController@index')->name('users.index');
Route::get('/users/create', 'App\Http\Controllers\UserController@create')->name('users.create');
Route::post('/users', 'App\Http\Controllers\UserController@store')->name('users.store');
Route::get('/users/{user}', 'App\Http\Controllers\UserController@show')->name('users.show');
Route::get('/users/{user}/edit', 'App\Http\Controllers\UserController@edit')->name('users.edit');
Route::put('/users/{user}', 'App\Http\Controllers\UserController@update')->name('users.update');
Route::delete('/users/{user}', 'App\Http\Controllers\UserController@destroy')->name('users.destroy');*/

Route::get('/main',function(){
    return view('layouts.layout');
});
