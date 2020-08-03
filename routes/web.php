<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->get('/', function () use ($router) {
	return response()->json([
		'sucess' => true, 
		'status' => 200, 
		'message' => "sucesso", 
		'api_version' => "1.0.0"
		]);
	});
	$router->get('/getSlangById/{id}', 'SlangController@getSlangById');
	$router->get('/getSlangByName/{name}', 'SlangController@getSlangByName');

	$router->get('/getAll', function () use ($router) {
		
	});
	$router->get('/getAllCategories', function () use ($router) {
		
	});
	
	$router->get('/categories/{category}', 'GiriaController@porCategoria');
	
	/* Usuario */
	$router->group(['prefix' => 'usuario'], function () use ($router) {
		$router->post('/login', ['uses' => 'usuarioController@login']);
		$router->get('/{id}', 'usuarioController@mostrar');
		$router->put('/{id}', 'usuarioController@atualizar');
		$router->delete('/{id}', 'usuarioController@eliminar');
	});
