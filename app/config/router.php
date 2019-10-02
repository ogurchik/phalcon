<?php
use \Phalcon\Mvc\Router;
$router = new Router(false);
$router->setUriSource(Router::URI_SOURCE_SERVER_REQUEST_URI);
$router->add('/', [
	'controller' => 'index',
	'action' => 'index'
]);
$router->add('/user/([0-9]{1,2})', [
	'controller' => 'user',
	'action' => 'index',
	'id' => 1
]);
$router->add('/user', [
	'controller' => 'user',
	'action' => 'index',
]);
$router->add('/user/show', [
	'controller' => 'user',
	'action' => 'show'
]);


/*$router->notFound([
	'controller' => 'index',
	'action' => 'index'
]);*/

return $router;
