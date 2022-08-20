<?php
require 'classes/User.php';
$users = $database->users();


require './views/users.view.php';
