<?php


$tasks = $database->selectAll('task', 'Task');


require './views/index.view.php';
