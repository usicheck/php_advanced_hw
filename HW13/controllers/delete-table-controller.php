<?php
require_once __DIR__ . '/../functions/database.php';
if ('POST' !== $_SERVER['REQUEST_METHOD']) {
    exit ('Method is not allowed!');
}
$connection = get_database_connection();
$statement = $connection->query("DROP TABLE `users`");
header('Location: ' . $_SERVER['HTTP_REFERER']);
