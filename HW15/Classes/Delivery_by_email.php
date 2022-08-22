<?php

namespace Classes;
use Interfaces\iDeliver;

class Delivery_by_email implements iDeliver
{
    public string $delivery;
    public function __construct($delivery){
        $this->delivery=$delivery;
    }

    public function deliver($logger)
    {
        if ($this->delivery === 'by_email') {
            echo "Вывод формата ({$logger->formatType->format($logger)}) по имейл";
        } else {
            die('Error deliver');
        }
    }
}
