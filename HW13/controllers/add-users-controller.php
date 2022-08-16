<?php
require_once __DIR__ . '/../functions/database.php';

if ('POST' !== $_SERVER['REQUEST_METHOD']) {
    exit('Method is Not Allowed.');
}

$name = $_POST['name'] ?? null;
$surname = $_POST['surname'] ?? 'not set';
$age = $_POST['age'] ?? 'not set';
$email = $_POST['email'] ?? null;


if (null === $name || null === $email) {
    exit('Name and email are required.');
}

$connection = get_database_connection();


$statement = $connection->prepare(
    'INSERT INTO `users` (`name`, `surname`, `age`,`email`) VALUES (:name, :surname, :age, :email)'
);

$statement->execute([
    'name' => $name,
    'surname' => $surname,
    'age' => $age,
    'email' => $email,
]);

header('Location: ' . $_SERVER['HTTP_REFERER']);
exit();
