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

Route::get('generatepermissionsreport', [
    'as'   => 'report.generatepermissionsreport',
    'uses' => 'ReportingController@genPermissionsReport']);
Route::get('generateusersreport', [
    'as'   => 'report.generateusersreport',
    'uses' => 'ReportingController@genUsersReport']);
Route::get('generaterolesreport', [
    'as'   => 'report.generaterolesreport',
    'uses' => 'ReportingController@genRolesReport']);
Route::get('generateuserschart', [
    'as'   => 'report.generateuserswithchart',
    'uses' => 'ReportingController@genUsersReportWithChart']);
