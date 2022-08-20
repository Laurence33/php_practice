<?php
$users = $database->selectAll('user', 'User');


require './views/users.view.php';
