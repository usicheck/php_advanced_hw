<?php
require_once __DIR__ . '/../functions/database.php';
if ('POST' !== $_SERVER['REQUEST_METHOD']) {
    exit('Method is not allowed');
}

$remove = $_POST['remove'];

$connection = get_database_connection();
foreach ($remove as $rem) {
    $result = $connection->query("DELETE FROM `users` WHERE `id`='$rem'");
}

header('Location: ' . $_SERVER['HTTP_REFERER']);
