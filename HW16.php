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

    public function getAuto();
}

class Taxi
{
    private iType $type;

    public function __construct(iType $type)
    {
        $this->type = $type;
    }

    public function getTaxi()
    {
        $this->type->getAuto();
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

    public function getAuto()
    {
        echo 'Your auto econom class — ' . $this->model . ', ' . $this->price;
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

    public function getAuto()
    {
        echo 'Your auto standart class — ' . $this->model . ', ' . $this->price;
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

    public function getAuto()
    {
        echo 'Your auto lux class — ' . $this->model . ', ' . $this->price;
    }
}

$taxi = new Taxi(new Standart('Chevrolet', 100));
$taxi->getTaxi();
