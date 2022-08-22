<?php

interface Sharnir
{
    public function getData();
}

class Mysql implements Sharnir
{
    public function getData()
    {
        echo 'some data from database';
    }
}

class Controller
{
    private $adapter;

    public function __construct(Sharnir $sharnir)

    {
        $this->adapter = $sharnir;
    }

    function getData()
    {
        $this->adapter->getData();
    }
}

$mysql = new Mysql();
$controller = new Controller($mysql);
$controller->getData();
