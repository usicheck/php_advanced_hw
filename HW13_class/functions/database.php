<?php

function get_database_connection(): PDO
{
    static $connection = null;

    if (null === $connection) {
        $dns = 'mysql:host=mysql;port=3306;dbname=php_advanced;charset=utf8mb4';

        $connection = new PDO($dns, 'root', 'root', [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ]);
    }
    return $connection;
}
