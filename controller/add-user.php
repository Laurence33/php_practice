<?php
require 'classes/User.php';
$name = $_POST['name'] ?? null;

if ($name) {
    $user = new User($name);
    echo $database->addUser($user);
}
