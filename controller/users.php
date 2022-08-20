<?php
$users = App::get('database')->selectAll('user', 'User');


require './views/users.view.php';
