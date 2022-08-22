<?php
require_once __DIR__ . '/../functions/database.php';
$connection=get_database_connection();
class User
{
    public string $name;
    public string $surname;
    public int $age;
    public string $email;

    public function __construct($name, $surname, $age, $email)
    {
    $this->name=$name;
    $this->surname=$surname;
    $this->age=$age;
    $this->email=$email;

    }

    public function getID(PDO $connection):void {
//        $connection=$this->connection;
        $res = $connection->query("SELECT * FROM `users` WHERE `email`='$this->email'");
        echo $res->fetchAll()['id'];
    }
}

$user=new User('Yasia','Shturkhal',29,'usicheck@gmail.com');
$user->getID($connection);
