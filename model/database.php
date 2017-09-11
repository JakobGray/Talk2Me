<?php

$dsn = 'mysql:host=localhost;dbname=talk2me';
$username = 'user1';
$password = 'pass';

try {
    $db = new PDO($dsn, $username, $password);
} catch (Exception $ex) {
    $error_message = $e->getMessage();
    echo $error_message;
    exit();
}