<?php
require './core/bootstrap.php';

// require 'dd.php';
// dd($_SERVER);


require Router::load('routes.php')->direct(Request::uri());
