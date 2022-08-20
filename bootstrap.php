<?php

require 'classes/Connection.php';
require 'classes/QueryBuilder.php';


return new QueryBuilder(Connection::make());
