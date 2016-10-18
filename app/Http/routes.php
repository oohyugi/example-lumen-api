<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
	$res['success'] = true;
	$res['result']	= 'hello world';

    return response($res);
});

$app->post('/login','LoginController@index');
$app->post('/register','UserController@register');
$app->get('/user/{id}',['middleware'=>'auth',
	'uses'=>'UserController@get_user']);
$app->get('/category','CategoryAdsController@index');
$app->get('/category/{id}','CategoryAdsController@read');
$app->post('/category/create','CategoryAdsController@create');
$app->post('/category/update/{id}','CategoryAdsController@update');
$app->post('/category/delete/{id}','CategoryAdsController@delete');

 /* Route item ads */
  $app->get('/item', 'ItemAdsController@index');
  $app->get('/item/{id}', 'ItemAdsController@read');
  $app->get('/item/delete/{id}', 'ItemAdsController@delete');
  $app->post('/item/create', 'ItemAdsController@create');
  $app->post('/item/update/{id}', 'ItemAdsController@update');


