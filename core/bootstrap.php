<?php

require 'classes/Connection.php';
require 'classes/QueryBuilder.php';
require './classes/Router.php';
require './classes/Request.php';

$config = require './config.php';

// Set the URI to the path only, removing the name of the app when served with apache
$app_name = $config['app_name'];
$_SERVER['REQUEST_URI'] = str_replace("/$app_name/", '', $_SERVER['REQUEST_URI']);
$_SERVER['REQUEST_URI'] = trim($_SERVER['REQUEST_URI'], '/');

$database = new QueryBuilder(Connection::make($config['database']));



$router = new Router();
