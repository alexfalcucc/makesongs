<?php 

// important: for generate all routes:
// $router->resource('song', 'SongsController');
// lesson of the route: https://laracasts.com/series/laravel-5-from-scratch/episodes/10

$router->get('/', [
	'uses' => 'App\Http\Controllers\PagesController@index',
	'as' => NULL,
	'middleware' => [],
	'where' => [],
	'domain' => NULL,
]);

$router->get('about', [
	'uses' => 'App\Http\Controllers\PagesController@about',
]);


Route::bind('song', function ($slug) {
	return App\Song::where('slug', $slug)->first();
});

// $router->bind('songs', function($slug) {
// 	return App\Song::whereSlug($slug)->first();
// });

$router->get('songs', [
	'uses' => 'App\Http\Controllers\SongsController@index',
]);

$router->get('songs/{slug}', [
	'uses' => 'App\Http\Controllers\SongsController@show',
]);

$router->get('songs/{slug}/edit', [
	'uses' => 'App\Http\Controllers\SongsController@edit',
]);

$router->patch('songs/{slug}/update', [
	'uses' => 'App\Http\Controllers\SongsController@update',
]);

$router->delete('songs/{slug}/delete', [
	'uses' => 'App\Http\Controllers\SongsController@destroy',
]);

$router->get('login', [
	'uses' => 'App\Http\Controllers\LoginController@index',
]);

//create
$router->get('song/new', [
	'uses' => 'App\Http\Controllers\SongsController@showCreate',
]);

$router->post('songs/create', [
	'uses' => 'App\Http\Controllers\SongsController@store',
]);

// $router->resource('song', 'SongsController');



// end here the exercice

// $router->get('auth/register', [
// 	'uses' => 'App\Http\Controllers\Auth\AuthController@showRegistrationForm',
// 	'as' => NULL,
// 	'middleware' => ['guest'],
// 	'where' => [],
// 	'domain' => NULL,
// ]);

// $router->post('auth/register', [
// 	'uses' => 'App\Http\Controllers\Auth\AuthController@register',
// 	'as' => NULL,
// 	'middleware' => ['guest'],
// 	'where' => [],
// 	'domain' => NULL,
// ]);

// $router->get('auth/login', [
// 	'uses' => 'App\Http\Controllers\Auth\AuthController@showLoginForm',
// 	'as' => NULL,
// 	'middleware' => ['guest'],
// 	'where' => [],
// 	'domain' => NULL,
// ]);

// $router->post('auth/login', [
// 	'uses' => 'App\Http\Controllers\Auth\AuthController@login',
// 	'as' => NULL,
// 	'middleware' => ['guest'],
// 	'where' => [],
// 	'domain' => NULL,
// ]);

// $router->get('auth/logout', [
// 	'uses' => 'App\Http\Controllers\Auth\AuthController@logout',
// 	'as' => NULL,
// 	'middleware' => [],
// 	'where' => [],
// 	'domain' => NULL,
// ]);

// $router->get('password/email', [
// 	'uses' => 'App\Http\Controllers\Auth\PasswordController@showResetRequestForm',
// 	'as' => NULL,
// 	'middleware' => ['guest'],
// 	'where' => [],
// 	'domain' => NULL,
// ]);

// $router->post('password/email', [
// 	'uses' => 'App\Http\Controllers\Auth\PasswordController@sendResetLink',
// 	'as' => NULL,
// 	'middleware' => ['guest'],
// 	'where' => [],
// 	'domain' => NULL,
// ]);

// $router->get('password/reset', [
// 	'uses' => 'App\Http\Controllers\Auth\PasswordController@showResetForm',
// 	'as' => NULL,
// 	'middleware' => ['guest'],
// 	'where' => [],
// 	'domain' => NULL,
// ]);

// $router->post('password/reset', [
// 	'uses' => 'App\Http\Controllers\Auth\PasswordController@resetPassword',
// 	'as' => NULL,
// 	'middleware' => ['guest'],
// 	'where' => [],
// 	'domain' => NULL,
// ]);
