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
    return view('index');
});

Route::get('/sobre', function () {
    return view('sobre');
});
Route::get('/ajuda', function () {
    return view('ajuda');
});
Route::get('/quiz', function () {
    return view('quiz');
});


Auth::routes();
Route::post('cadastrar',['as' => 'cadastrar', 'uses' => 'AdminController@cadastrar']);
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/listagem', 'AdminController@listagem')->name('listagem');
Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/pdf/{id}/', 'AdminController@pdf')->name('pdf');
Route::get('/questionario', 'AdminController@questionario')->name('questionario');
Route::get('/quest_edit/{id}/',['as' => 'quest_edit', 'uses' => 'AdminController@editar']);
Route::get('/quest/{id}/',['as' => 'quest', 'uses' => 'AdminController@visualizar']);
Route::any('/quest_update/{id}/',['as' => 'quest_update', 'uses' => 'AdminController@update']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
