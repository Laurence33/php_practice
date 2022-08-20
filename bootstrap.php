<?php

require 'classes/Connection.php';
require 'classes/QueryBuilder.php';


$config = require './config.php';

return new QueryBuilder(Connection::make($config['database']));
