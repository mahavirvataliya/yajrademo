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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/datatables/datatables.data', array('middleware' => 'auth', 'uses' => 'DatatablesController@anyData'))->name('datatables.data');
Route::get('/datatables', array('middleware' => 'auth', 'uses' => 'DatatablesController@getIndex'))->name('datatables');


Route::get('/notes.data', array('middleware' => 'auth', 'uses' => 'NotesController@anyData'))->name('notes.data');
Route::get('/notes', array('middleware' => 'auth', 'uses' => 'NotesController@getIndex'))->name('notes');