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


Route::get('/', 'UserProfileController@index');
Route::get('users/create', 'UserProfileController@create'); 
Route::post('users', 'UserProfileController@store');
Route::get('users/{user}', 'UserProfileController@show');
Route::get('users/{user}/edit', 'UserProfileController@edit');
Route::patch('users/{user}', 'UserProfileController@update');

Route::get('notes/{user}', 'NotesController@notes');
Route::get('add_notes/{user}', 'NotesController@add_notes');
Route::post('store_notes', 'NotesController@store_notes');
Route::delete('delete/{notes}', 'NotesController@delete');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
