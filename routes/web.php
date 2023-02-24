<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/applicant/login', 'Auth\ApplicantLoginController@showLoginForm')->name('applicant.login');
Route::post('/applicant/login', 'Auth\ApplicantLoginController@login');