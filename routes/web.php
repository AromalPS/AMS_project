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
    return view('main');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/user/logout', 'Auth\LoginController@userLogout')->name('user.logout');
Route::post('/user/delete/{show}', 'HomeController@RemoveStudent')->name('user.delete.student');

Route::prefix('admin')->group(function (){
    // Dashboard routes
    Route::get('/', 'AdminController@index')->name('admin.dashboard');

    // Login routes
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

    // Logout routes
    Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

    // Register routes
    Route::get('/register', 'Auth\AdminRegisterController@showRegistrationForm')->name('admin.register');
    Route::post('/register', 'Auth\AdminRegisterController@register')->name('admin.register.submit');

    // Reset routes
    Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset')->name('admin.password.update');
    Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
});

Route::prefix('teacher')->group(function (){
    // Dashboard routes
    Route::get('/', 'HomeController@index')->name('teacher.dashboard');

    // Login routes
    Route::get('/login', 'Auth\TeacherLoginController@showLoginForm')->name('teacher.login');
    Route::post('/login', 'Auth\TeacherLoginController@login')->name('teacher.login.submit');

    // Logout routes
    Route::post('/logout', 'Auth\TeacherLoginController@logout')->name('teacher.logout');

    // Register routes
    Route::get('/register', 'Auth\TeacherRegisterController@showRegistrationForm')->name('teacher.register');
    Route::post('/register', 'Auth\TeacherRegisterController@register')->name('teacher.register.submit');

    // Reset routes
    Route::post('/password/email', 'Auth\TeacherForgotPasswordController@sendResetLinkEmail')->name('teacher.password.email');
    Route::post('/password/reset', 'Auth\TeacherResetPasswordController@reset')->name('teacher.password.update');
    Route::get('/password/reset', 'Auth\TeacherForgotPasswordController@showLinkRequestForm')->name('teacher.password.request');
    Route::get('/password/reset/{token}', 'Auth\TeacherResetPasswordController@showResetForm')->name('teacher.password.reset');

    //Class
    Route::get('/class', 'HomeController@ShowClass')->name('teacher.student.class');
});
