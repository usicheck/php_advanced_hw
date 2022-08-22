<?php
//Побудувати систему таксі.
//
//Клієнтський код повинен викликати тип доставки, який у свою чергу
// віддаватиме машину відповідного типу, яка матиме 2 методи
// (виведення моделі машини та виведення ціни).
//
//Усього буде 3 типи таксі:
//Економ
//Стандарт
//Люкс

interface iType
{
    public function __construct($model, $price);

    public function getModel();

    public function getPrice();

}

class Taxi
{
    private iType $type;

    public function __construct(iType $type)
    {
        $this->type = $type;
    }

    public function getModel()
    {
        return $this->type->getModel();
    }

    public function getPrice()
    {
        return $this->type->getPrice();
    }
}

class Econom implements iType
{
    public string $model;
    public float $price;

    public function __construct($model, $price)
    {
        $this->model = $model;
        $this->price = $price;
    }

    public function getModel()
    {
        echo 'Your auto econom class — ' . $this->model . '.';
    }

    public function getPrice()
    {
        echo 'Your auto costs — ' . $this->price . ' uah.';
    }

}

class Standart implements iType
{
    public string $model;
    public float $price;

    public function __construct($model, $price)
    {
        $this->model = $model;
        $this->price = $price;
    }

    public function getModel()
    {
        echo 'Your auto standart class — ' . $this->model . '.';
    }

    public function getPrice()
    {
        echo 'Your auto costs — ' . $this->price . ' uah.';
    }
}

class Lux implements iType
{
    public string $model;
    public float $price;

    public function __construct($model, $price)
    {
        $this->model = $model;
        $this->price = $price;
    }

    public function getModel()
    {
        echo 'Your auto lux class — ' . $this->model . '.';
    }

    public function getPrice()
    {
        echo 'Your auto costs — ' . $this->price . ' uah.';
    }
}

$taxi = new Taxi(new Standart('Chevrolet', 100));
$taxi->getModel();
echo PHP_EOL;
$taxi->getPrice();
echo PHP_EOL;

