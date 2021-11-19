<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('alunos', 'AlunoController@index');
$router->post('alunos', 'AlunoController@insert');
$router->get('alunos/{id}', 'AlunoController@view');
$router->put('alunos/{id}', 'AlunoController@update');
$router->delete('alunos/{id}', 'AlunoController@delete');
