<?php
require_once __DIR__ . '/../functions/database.php';
if ('GET' !== $_SERVER['REQUEST_METHOD']) {
    exit('Method is Not Allowed.');
}

$connection = get_database_connection();
$name_id = (int)($_GET['id']);

$queryResult = $connection->query("SELECT * FROM `users` WHERE id ='$name_id'");
echo '<pre>';
print_r($queryResult->fetch());
echo '</pre>';
