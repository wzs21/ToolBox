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

Route::get('/','WelcomeController@index');
Route::get('home','WelcomeController@index');
Route::get('about','PagesController@about');
Route::get('contact','PagesController@contact');

/*
Route::get('articles','ArticlesController@index');
Route::get('articles/create','ArticlesController@create');
Route::get('articles/{id}','ArticlesController@show');

//respond our post request to 'articles' page
Route::post('articles','ArticlesController@store');

//edit an article
Route::get('articles/{id}/edit','ArticlesController@edit');
*/
	//  |  all boils down to this resource
	//  |
	//	V

Route::resource('articles','ArticlesController');
Route::resource('users','UsersController');
Route::resource('transactions','TransactionsController');
Route::resource('tools','DrawersController');
 

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
	]);

Route::get('foo',['middleware'=>'admin',function()
{
	return 'hye';
}]);

//Route::get('users',['middleware'=>'admin','uses'=>'UsersController@index']);
