<?php

namespace Classes;

use Interfaces\iDeliver;

class Delivery_to_console implements iDeliver
{
    public string $delivery;
    public function __construct($delivery){
        $this->delivery=$delivery;
    }

    public function deliver($logger)
    {
        if ($this->delivery === 'to_console') {
            echo "Вывод формата ({$logger->formatType->format($logger)}) в консоль";
        } else {
            die('Error deliver');
        }
    }
}
