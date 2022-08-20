<?php


$tasks = App::get('database')->selectAll('task', 'Task');


require './views/index.view.php';
