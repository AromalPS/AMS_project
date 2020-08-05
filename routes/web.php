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

Route::prefix('admin')->group(function (){
    // Dashboard routes
    Route::get('/', 'AdminContoller@index')->name('admin.dashboard');

    // Login routes
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

    // Logout routes
    Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

    // Register routes
    Route::get('/register', 'Auth\AdminRegisterController@showRegistrationForm')->name('admin.register');
    Route::post('/register', 'Auth\AdminRegisterController@register')->name('admin.register.submit');
});

Route::prefix('teacher')->group(function (){
    // Dashboard routes
    Route::get('/', 'TeacherContoller@index')->name('teacher.dashboard');

    // Login routes
    Route::get('/login', 'Auth\TeacherLoginController@showLoginForm')->name('teacher.login');
    Route::post('/login', 'Auth\TeacherLoginController@login')->name('teacher.login.submit');

    // Logout routes
    Route::post('/logout', 'Auth\TeacherLoginController@logout')->name('teacher.logout');

    // Register routes
    Route::get('/register', 'Auth\TeacherRegisterController@showRegistrationForm')->name('teacher.register');
    Route::post('/register', 'Auth\TeacherRegisterController@register')->name('teacher.register.submit');
});
