<?php

$user = 'root';
$password = '';
$dsn = 'mysql:host=localhost:3310;dbname=php_db';

try {
    $db = new PDO($dsn, $user, $password);
    echo 'done';
} catch (PDOException $error) {
    die('Error!' . $error->getMessage());
}
