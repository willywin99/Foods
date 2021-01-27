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

$router->group(['prefix' => 'api/v1'], function() use ($router) {

    $router->get('/foods', 'FoodController@index');
    $router->post('/foods', 'FoodController@store');
    $router->put('/foods/{id}', 'FoodController@update');
    $router->delete('/foods/{id}', 'FoodController@destroy');
    $router->get('/foods/{id}', 'FoodController@show');

});
