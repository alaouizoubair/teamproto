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

Route::get('/', 'Auth\AuthController@getLogin');
Route::get('home', ['as'=>'article.index','uses' => 'ArticleController@index']);

Route::group(['middleware' => 'auth'],function(){
	Route::resource('article','ArticleController',['only'=>['index','store','show','update','destroy']]);
	Route::post('article/recherche',['as'=>'article.recherche','uses' => 'ArticleController@recherche']);
	Route::get('article/recherche',['as'=>'article.recherche','uses' => 'ArticleController@index']);
	Route::get('article/duplicate/{article}',['as'=>'article.duplicate','uses' => 'ArticleController@duplicate']);

	Route::resource('client','ClientController',['only'=>['index','store']]);
	
	//Route::resource('client','ClientController',['only'=>['index']]);

});





// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');



