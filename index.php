<?php
$database = require './core/bootstrap.php';

require './classes/Router.php';

$router = new Router();
// require 'routes.php';
// $router->define($routes);

// require $router->direct($_SERVER['REQUEST_URI']);

$uri = $_SERVER['REQUEST_URI'];
require Router::load('routes.php')->direct($uri);
