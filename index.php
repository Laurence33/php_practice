<?php


require 'classes/Task.php';

// $statement = $conn->query("insert into task values(NULL, 'Go to store', false),(NULL, 'Learn PHP', true),(NULL, 'Finish my tasks', false);");

// if ($statement) {
//     echo 'Added tasks!';
// }
$query = require 'bootstrap.php';

$tasks = $query->selectAll('task', 'Task');


require('./index.view.php');
