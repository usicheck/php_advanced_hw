<?php
//Сделайте класс City, в котором будут следующие свойства: name, population (количество населения).
//
//Создайте 5 объектов класса City, заполните их данными и запишите в массив.
//
//Переберите созданный вами массив с городами циклом и выведите города и их население на экран.
//class City
//{
//    public string $name;
//    public int $population;
//
//
//    public function __construct($name,$population){
//        $this->name=$name;
//        $this->population=$population;
//    }
//
//}
//$cities=[
//    new City ('Chicago',100000),
//    new City ('Miami',9000),
//    new City ('Shanhai',5000),
//];
//
//foreach ($cities as $city){
//    echo $city->name . ' ' . $city->population . '<br>';
//}
class User
{
    public $surname; // фамилия
    public $name; // имя
    public $patronymic; // отчество

    public function __construct($surname, $name, $patronymic)
    {
        $this->surname = $surname;
        $this->name = $name;
        $this->patronymic = $patronymic;
    }
}
$user = new User('Иванов', 'Иван', 'Иванович');

$props = ['surname', 'name', 'patronymic'];
echo $user->{$props[0]}; // выведет 'Иванов'

