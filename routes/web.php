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
Route::get('/', 'HomeController@index');
Route::post('login', 'Homecontroller@login');
Route::get('logout', 'HomeController@logout');
Route::get('access_denied', 'HomeController@access_denied');
Route::get('/index', 'HomeController@index');

Route::get('home', 'HomeController@home');

//data entry
Route::get('dataentry', 'ContactController@Index');
Route::get('add_contact', 'ContactController@add_contact');
//    Route::get('search_contact','ContactController@search_contact');
Route::get('datasearch', 'ContactController@data_search');

Route::get('organisation', 'OrganisationController@Index');
Route::get('add_organisation', 'OrganisationController@add_organisation');
Route::get('search_organisation', 'OrganisationController@search_organisation');


//search
Route::post('search', 'SearchController@search');


//user
Route::get('add_user', 'UserController@add_user');
Route::get('edit_user', 'UserController@edit_user');
Route::get('update_user', 'UserController@update_user');
Route::get('adminuser', 'UserController@Index');

Route::get('dataupload','DatauploadController@Index');
Route::get('dailyreport','DatauploadController@DailyReport');
Route::get('targetreport','DatauploadController@TargetReport');

    
