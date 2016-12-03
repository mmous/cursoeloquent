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

use App\User;
use Faker\Factory as Faker;

Route::get('/', [
    'as' =>  'home',
    'uses' => 'PagesController@home'
]);

Route::get('/all', [
    'as' =>  'all',
    'uses' => 'QueryController@getAll'
]);

Route::get('/get/{gender}', [
    'as' =>  'get',
    'uses' => 'QueryController@getGet'
]);

Route::delete('/delete/{id}', [
    'as' =>  'delete',
    'uses' => 'QueryController@delete'
]);

Route::get('/lists', [
    'as' =>  'lists',
    'uses' => 'QueryController@flist'
]);

