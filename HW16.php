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
    public function getModel();

    public function getPrice();

}

class Econom implements iType
{
    public function getModel()
    {
        echo 'Your auto econom class — Lada Kalina. ' . PHP_EOL;
    }

    public function getPrice()
    {
        echo 'Your auto costs — 15 uah/km.' . PHP_EOL;
    }

}

class Standart implements iType
{

    public function getModel()
    {
        echo 'Your auto standart class — Nissan Juke. ' . PHP_EOL;
    }

    public function getPrice()
    {
        echo 'Your auto costs — 25 uah/km.' . PHP_EOL;
    }
}

class Lux implements iType
{

    public function getModel()
    {
        echo 'Your auto lux class — Jaguar, чьо ні. ' . PHP_EOL;
    }

    public function getPrice()
    {
        echo 'Your auto costs — 35 uah/km.' . PHP_EOL;
    }
}

abstract class ATaxi implements iType
{
    abstract protected function callType(): iType;

    public function getModel()
    {
        $type = $this->callType();
        $type->getModel();
    }

    public function getPrice()
    {
        $type = $this->callType();
        $type->getPrice();
    }
}

class EconomApp extends ATaxi
{
    public function callType(): iType
    {
        return new Econom();

    }
}

class StandartApp extends ATaxi
{
    public function callType(): iType
    {
        return new Standart();

    }
}

class LuxApp extends ATaxi
{
    public function callType(): iType
    {
        return new Lux();

    }
}

function taxi(ATaxi $taxi)
{
    $taxi->callType()->getModel();
    $taxi->callType()->getPrice();
}

taxi(new EconomApp());
taxi(new StandartApp());
taxi(new LuxApp());
