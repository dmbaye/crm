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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/profile', 'ProfileController@show')->name('profile.show');

Route::get('/contacts', 'ContactsController@index')->name('contacts.index');
Route::get('/contacts/create', 'ContactsController@create')->name('contacts.create');
Route::get('/contacts/{contact}', 'ContactsController@show')->name('contacts.show');
Route::get('/contacts/{contact}/edit', 'ContactsController@edit')->name('contacts.edit');
Route::post('/contacts/store', 'ContactsController@store')->name('contacts.store');
Route::post('/contacts/{contact}/update', 'ContactsController@update')->name('contacts.update');

Route::get('/companies', 'CompaniesController@index')->name('companies.index');
Route::get('/companies/create', 'CompaniesController@create')->name('companies.create');
Route::get('/companies/{company}', 'CompaniesController@show')->name('companies.show');
Route::get('/companies/{company}/edit', 'CompaniesController@edit')->name('companies.edit');
Route::post('/companies/store', 'CompaniesController@store')->name('companies.store');
Route::post('/companies/{company}/update', 'CompaniesController@update')->name('companies.update');

Route::get('/projects', 'ProjectsController@index')->name('projects.index');
Route::get('/projects/create', 'ProjectsController@create')->name('projects.create');
Route::get('/projects/{project}', 'ProjectsController@show')->name('projects.show');
Route::get('/projects/{project}/edit', 'ProjectsController@edit')->name('projects.edit');
Route::get('/projects/store', 'ProjectsController@store')->name('projects.store');
Route::get('/projects/{project}/update', 'ProjectsController@update')->name('projects.update');
