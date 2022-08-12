<?php
//Математическая подсказка: корень первой степени - это само число.
// То есть calcSqrt(число, 1) должно просто вернуть само число.
//
//А корень любой степени можно найти с помощью функции pow,
// просто параметром передав ей дробь. Например, pow(число, 1/3) - так найдем корень третьей степени.

class ArraySumHelper
{
    /*
        Находит сумму первых
        степеней элементов массива:
    */
    public function getAvg1(array $arr): void
    {
        $sum = 0;
        foreach ($arr as $elem) {
            $sum += pow($elem, 2); // возведем во вторую степень
        }
        echo $sum;
    }

    /*
        Находит сумму вторых степеней
        элементов массива и извлекает
        из нее квадратный корень:
    */

}
$ArraySumHelper=new ArraySumHelper;
$arr=[1,2,3];
 $ArraySumHelper->getAvg1($arr);


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
//class User
//{
//    public $surname; // фамилия
//    public $name; // имя
//    public $patronymic; // отчество
//
//    public function __construct($surname, $name, $patronymic)
//    {
//        $this->surname = $surname;
//        $this->name = $name;
//        $this->patronymic = $patronymic;
//    }
//}
//$user = new User('Иванов', 'Иван', 'Иванович');
//
//$props = ['surname', 'name', 'patronymic'];
//echo $user->{$props[0]}; // выведет 'Иванов'

