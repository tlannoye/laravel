<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', array('uses'=>'PostsController@index', 'as'=>'posts.index'));
Route::get('/blog/{slug}', array('uses'=>'PostsController@view', 'as'=>'post.view'));
Route::get('/posts/{id}', array('uses'=>'PostsController@edit', 'as' => 'posts.edit'));
Route::post('/posts/{id}', array('uses'=>'PostsController@update', 'as' => 'posts.update','before'=>'csrf'));

Route::get('/formulaire', array('uses'=>'FormulaireController@edit', 'as'=>'formulaire'));

Route::get('monappli/public/posts','PostsController@test');
