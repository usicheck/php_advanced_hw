<?php

//Как задать константу и обратиться к ней вне класса
//class Test
//{
//    // Задаем константу:
//    const CONSTANT = 'test';
//}
//
//echo Test::CONSTANT; // выведет 'test'

//Вызов константы внутри класса
//class Test
//{
//    const CONSTANT = 'test';
//
//    function getConstant() {
//        return self::CONSTANT;
//    }
//}
//$test = new Test;
//echo $test->getConstant(); // выведет 'test'


//Пример обращения к статической функции внутри класса
//class Math
//{
//    // Найдем удвоенную сумму:
//    public static function getDoubleSum($a, $b)
//    {
//        return 2 * self::getSum($a, $b); // используем другой метод
//    }
//
//    public static function getSum($a, $b)
//    {
//        return $a + $b;
//    }
//
//    public static function getProduct($a, $b)
//    {
//        return $a * $b;
//    }
//}
//echo Math::getDoubleSum(1, 2);



//Пример статического метода в классе. Для его вызова не нужно создавать объект, а обратиться можно через ::
//class Test
//{
//    // Статический метод:
//    public static function method()
//    {
//        return '!!!';
//    }
//}
//echo Test::method(); // выведет '!!!'

//Оператор instanceof — выявляет принадлежность объекта к классу
//var_dump($obj instanceof Class1);

//пример хранения метода в переменной или в массиве, с вызовом по индексу
//class User
//{
//    private $name;
//    private $age;
//
//    public function __construct($name, $age)
//    {
//        $this->name = $name;
//        $this->age = $age;
//    }
//
//    public function getName()
//    {
//        return $this->name;
//    }
//
//    public function getAge()
//    {
//        return $this->age;
//    }
//}
//$user = new User('john', 21);
//	$method = 'getName';
//	echo $user->$method(); // выведет 'john'
//$methods = ['getName', 'getAge'];
//echo $user->{$methods[0]}(); // выведет 'john'

//пример обращения по индексу
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

//Пример перебора циклом массива из объектов и их свойств
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

//Пример проверки условий для set в классе
//class Worker
//{
//    private int $age=5;
//
//    private function checkAge($age): bool
//    {
//        if (($age > 1) & ($age < 100)) {
//            return true;
//        } else {
//            return false;
//        }
//    }
//    public function setAge($age): int
//    {
//        if ($this->checkAge($age)){
//            return $this->age = $age;
//        }
//        else {
//            return $this->age;
//        }
//    }
//
//    public function getAge(): int
//    {
//        return $this->setAge($this->age);
//    }
//
//}
//
//$ivan = new Worker;
//$ivan->setAge(23);
//
//echo $ivan->getAge();

//пример использования trait и добавление в класс
//trait Trait1 {
//    public function test(): int
//    {
//        return 1;
//    }
//}
//trait Trait2 {
//    public function test(): int
//    {
//        return 2;
//    }
//}
//trait Trait3 {
//    public function test(): int
//    {
//        return 3;
//    }
//}
//
//class Test {
//    use Trait1, Trait2, Trait3 {
//        Trait1::test insteadof Trait2;
//        Trait1::test insteadof Trait3;
//        Trait2::test as testReturn2;
//        Trait3::test as testReturn3;
//    }
//
//    public function getSum()
//    {
//        echo $this->test()+$this->testReturn2()+$this->testReturn3() . PHP_EOL;
//    }
//}
//
//$obj=new Test;
//$obj->getSum();



////пример использования интерфейса и его инплементации
//interface iName
//{
////protected string $name;//тут не сработает ни область видимости (только public), ни объявление свойств, только методы
//    public function iName($name);
//}
//
//interface iAge
//{
//    public function iAge($age);
//}
//
//class NameAge implements iName, iAge // в отличии от абстрактного класса, имплементировать можно несколь интерфейсов
//{
//    function iName($name) {
//        echo $name . PHP_EOL;
//    }
//    function iAge($age){
//        echo $age . PHP_EOL;
//    }
//}
//$NameAge=new NameAge;
//$NameAge->iName('Vasya');
//$NameAge->iAge('28');
//
//
//
////пример использования абстрактного класса и его наследование
//abstract class AbstractName
//{
//    protected string $name;
//
//    function __construct($name) //тут можно реализовать функцию, а в интерфейсе нельзя
//    {
//        $this->name = $name;
//    }
//    abstract function getName();
//}
//
//class VoidName extends AbstractName
//{
//    function getName()
//    {
//        echo $this->name . PHP_EOL;
//    }
//}
//
//$obj = new VoidName('Yasia');
//$obj->getName();




//пример использования конструктора функции __construct
//class Person
//{
//    public $name, $age;
//    function __construct($name, $age)
//    {
//        $this->name = $name;
//        $this->age = $age;
//    }
//
//    function displayInfo()
//    {
//        echo "Name: $this->name; Age: $this->age<br>";
//    }
//}
//$tom = new Person("Tom", 36);
//$tom -> displayInfo();
//
//$bob = new Person("Bob", 41);
//$bob -> displayInfo();

//пример сравнения двух переменных, которые являются объектами (экземплярами) класса
//class Person {
//    public string $name= 'Oleg';
//}
//
//$person = new Person();
//
//$tom = $person;
////$tom -> name = "Tom";
//$tom -> age = 36;
//
//$tomas = $person;
//var_dump ($person).'<br>';
//
//var_dump($tom);
//var_dump($tomas);
//
//if($tom == $tomas) echo "переменные tom и tomas равны<br>";
//else echo "переменные tom и tomas НЕ равны<br>";
//
//if($tom === $tomas) echo "переменные tom и tomas эквивалентны";
//else echo "переменные tom и tomas НЕ эквивалентны";


//пример сравнения двух переменных, которые являются объектами (экземплярами) класса

//class Person
//{
//    public $name, $age;
//    function displayInfo()
//    {
//        echo "Name: $this->name; Age: $this->age<br>";
//    }
//}
//$tom = new Person();
//$tom -> name = "Tom";
//$tom -> age = 36;
//
//$tomas = new Person();
//$tomas -> name = "Tom";
//$tomas -> age = 36;
//
//if($tom == $tomas) echo "переменные tom и tomas равны<br>";
//else echo "переменные tom и tomas НЕ равны<br>";


//пример с созданием нескольких объектов из одного класса и их вывод
//class Person
//{
//    public $name = "Undefined", $age = 18;
//
//    function displayInfo()
//    {
//        echo "Name: $this->name; Age: $this->age<br>";
//    }
//}
//$tom = new Person();
//$tom -> name = "Tom";
//$tom -> displayInfo();
//
//$bob = new Person();
//$bob -> name = "Bob";
//$bob -> age = 25;
//$bob -> displayInfo();


//пример с созданием объекта, добавлением значений в свойства и созданием переменной из свойства
//class Person
//{
//    public $name, $age;
//
//    function hello()
//    {
//        echo "Hello!<br>";
//    }
//}
//$tom = new Person();
//$tom->name = "Tom"; // установка свойства $name
//$tom->age = 36; // установка свойства $age
//$personName = $tom->name;    // получение значения свойства $name
//echo "Имя пользователя: " . $personName . "<br>";
//$tom->hello(); // вызов метода hello()
//print_r($tom);


//пример с указателем на родительский класс

//class MyClass
//{
//    protected function myFunc()
//    {
//        echo "MyClass::myFunc()\n";
//    }
//}
//
//class OtherClass extends MyClass
//{
//    // Переопределить родительское определение
//    public function myFunc()
//    {
//        // Но всё ещё вызываем родительскую функцию
//        parent::myFunc();
//        echo "OtherClass::myFunc()\n";
//    }
//}
//
//$class = new OtherClass();
//$class->myFunc();


//пример с дочерним классом и $this

//class Transport {
//    public string $colour;
//    protected int $wheels = 0;
//    protected string $engineSound = 'bbrrr';
//
//
//    public function getEngineSound (): string {
//       return $this->engineSound;
//
//    }
//}
//class Car extends Transport {
//protected int $wheels = 4;
//protected string $engineSound = 'phhh';
//
//public function getEngineSound (): string {
//        return "Car say: " . parent:: getEngineSound();
////    return "Car say: " . $this->engineSound;
//}
//}
//$transport= new Car();
//$transport->colour="black";
//
//var_dump($transport);
//var_dump($transport->getEngineSound());


//пример с конструктором

//class ValueObject {
//    public string $colour;
//    public function __construct($colour) {
//        $this->colour = $colour;
//        echo 'Викликаний конструктор<br>';
//    }
//    public function __destruct() {
//        echo 'Викликаний деструктор';
//    }
//    public function f_get() {
//        return $this->colour;
//    }
//}
//$obj = New ValueObject (5);
//echo 'Значення властивості var дорівнює'. $obj->f_get() . '<br>';
//echo 'Виведення перед видаленням об\'єкта<br>';
//unset($obj);
//
//class ValueRed extends ValueObject {
//    private string $red='red';
//
//
//}


//class Class1 {
//    protected function f_display() {
//        echo 'Метод f_display класу Class1<br>';
//    }
//}
//class Class2 extends Class1 {
//    public function f_display() {
////        parent::f_display();
//        echo 'Привіт';
//    }
//}
//$obj = New Class2();
//$obj->f_display();
