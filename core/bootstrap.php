<?php

require 'classes/Connection.php';
require 'classes/QueryBuilder.php';
require './classes/Router.php';
require './classes/Request.php';

$config = require './config.php';

$database = new QueryBuilder(Connection::make($config['database']));



$router = new Router();
