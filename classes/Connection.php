<?php
define("DB_HOST", '127.0.0.1');
define("DB_NAME", 'php_practice');
define("DB_USER", 'root');
define("DB_PASSWORD", '');

class Connection
{
    public static function make()
    {
        try {
            return new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);
        } catch (PDOException $e) {
            die('Could not connect to database: ' . $e->getMessage());
        }
    }
}
