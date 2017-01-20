<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/log', 'ActivityLogController@index');
Route::resource('post', 'PostController');

Route::get('generatehelloworld', [
    'as'   => 'report.generatepermissionsreport',
    'uses' => 'ReportingController@genPermissionsReport']);
Route::get('generateuserschart', [
    'as'   => 'report.generateusersreport',
    'uses' => 'ReportingController@genUsersReport']);
Route::get('generateuserstable', [
    'as'   => 'report.generaterolesreport',
    'uses' => 'ReportingController@genRolesReport']);
