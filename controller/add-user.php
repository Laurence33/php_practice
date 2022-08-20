<?php
require 'classes/User.php';
$name = $_POST['name'] ?? null;

if ($name) {
    $database->insert('user', (array)$_POST);
    header('location: /users');
}
