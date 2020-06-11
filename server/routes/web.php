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

Route::get('/channels/{id}/tasks', 'TaskController@index')->name('tasks.index');
Route::get('/channels/{id}/tasks/new', 'TaskController@new')->name('tasks.new');
Route::post('/channels/{id}/tasks/create', 'TaskController@create')->name('tasks.create');
Route::get('/channels/{id}/tasks/{task_id}/edit', 'TaskController@edit')->name('tasks.edit');
Route::post('/channels/{id}/tasks/{task_id}/update', 'TaskController@update')->name('tasks.update');

Route::get('/channels', 'ChannelController@index')->name('channels.index');
Route::get('/channels/new', 'ChannelController@new')->name('channels.new');
Route::post('channels/create', 'ChannelController@create')->name('channels.create');
