<?php

require 'classes/Connection.php';
require 'classes/QueryBuilder.php';


$config = require './config.php';

$app_name = $config['app_name'];
$_SERVER['REQUEST_URI'] = str_replace("/$app_name/", '', $_SERVER['REQUEST_URI']);
$_SERVER['REQUEST_URI'] = trim($_SERVER['REQUEST_URI'], '/');

return new QueryBuilder(Connection::make($config['database']));
