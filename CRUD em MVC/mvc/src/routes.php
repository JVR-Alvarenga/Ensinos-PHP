<?php
use \core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');

$router->get('/novo', 'UsuarioController@add');
$router->post('/novo', 'UsuarioController@addAction');

$router->get('/usuario/{id}/editar', 'UsuarioController@edit');
$router->post('/usuario/{id}/editar', 'UsuarioController@editAction');