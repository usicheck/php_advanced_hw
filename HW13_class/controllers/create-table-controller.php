<?php
require_once __DIR__ . '/../functions/database.php';
if ('POST' !== $_SERVER['REQUEST_METHOD']) {
    exit ('Method is not allowed!');
}
$connection = get_database_connection();
$statement = $connection->query("CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT, 
  `name` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `surname` varchar(150) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `age` tinyint UNSIGNED DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
");
if (!empty($statement)) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
} else {
    http_response_code(404);
}


