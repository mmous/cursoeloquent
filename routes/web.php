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

//Route::get('/crear', function () {
//    $faker = Faker::create('es_AR');
//
//    $user = User::create([
//                'name' => $faker->name,
//                'email' => $faker->email,
//                'password' => bcrypt('1234'),
//                'gender' => $faker->randomElement(['m', 'f']),
//                'biography' => $faker->text(100),
//    ]);
//
//    return $user;
//});
//
//Route::get('/act/{id}', function ($id) {
//    $faker = Faker::create('es_AR');
//
//    $user = User::find($id);
//    $user->biography = 'Usuario Actualizado';
//    $user->save();
//
//    return $user;
//});
//
//Route::get('/leer/{id}', function ($id) {
//    $user = User::find($id);
//
//    return $user;
//});
//
//Route::get('/borrar/{id}', function ($id) {
//    $user = User::find($id);
//    $user->delete();
//    return 'Usuario Elminiado';
//});
