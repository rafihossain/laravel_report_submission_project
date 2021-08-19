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
    return view('admin.login.login');
});

Route::get('/add-report', [
    'uses' => 'AdminController@add',
    'as'   => 'add-report',
]);
Route::get('/manage-report', [
    'uses' => 'AdminController@manage',
    'as'   => 'manage-report',
]);
Route::post('/save-report', [
    'uses' => 'AdminController@saveReport',
    'as'   => 'save-report',
]);
Route::get('/view-report/{id}', [
    'uses' => 'AdminController@viewReport',
    'as'   => 'view-report',
]);
Route::get('/edit-report/{id}', [
    'uses' => 'AdminController@editReport',
    'as'   => 'edit-report',
]);
Route::post('/update-report', [
        'uses' => 'AdminController@updateReport',
        'as'   => 'update-report',
]);
    
Route::get('/delete-report/{id}', [
    'uses' => 'AdminController@deleteReport',
    'as'   => 'delete-report',
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
