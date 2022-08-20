<?php
require 'classes/User.php';
$name = $_POST['name'] ?? null;

if ($name) {
    $user = new User();
    $user->name = $name;
    if ($database->addUser($user)) {
        header('location: /users');
    }
}
