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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api'], function () use ($router) {
    
  $router->get('addressee',  ['uses' => 'AddresseeController@showAll']);

  $router->get('addressee/{id}', ['uses' => 'AddresseeController@showOne']);

  $router->post('addressee', ['uses' => 'AddresseeController@create']);

  $router->delete('addressee/{id}', ['uses' => 'AddresseeController@delete']);

  $router->put('addressee/{id}', ['uses' => 'AddresseeController@update']);
});