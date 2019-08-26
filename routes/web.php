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

Route::get('/',[
    'uses' => 'WelcomeController@welcome',
    'as' => 'welcome'
]);

Route::get('/jardin',[
    'uses' => 'WelcomeController@garden',
    'as' => 'garden'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/crear',[
    'uses' =>'Usuario\TrabajoController@create',
    'as' => 'trabajo.create'
]);

Route::post('/store',[
    'uses' =>'Usuario\TrabajoController@store',
    'as' => 'trabajo.store'
]);

Route::post('/materias',[
    'uses' =>'Usuario\MateriaController@store',
    'as' => 'materias.store'
]);