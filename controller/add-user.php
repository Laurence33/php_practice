<?php
$name = $_POST['name'] ?? null;

if ($name) {
    App::get('database')->insert('user', (array)$_POST);
    header('location: /users');
}
