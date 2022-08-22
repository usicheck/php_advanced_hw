<?php

namespace Classes;

use Interfaces\iDeliver;

class Delivery_by_sms implements iDeliver
{
    public string $delivery;
    public function __construct($delivery){
        $this->delivery=$delivery;
    }

    public function deliver($logger)
    {
        if ($this->delivery === 'by_sms') {
            echo "Вывод формата ({$logger->formatType->format($logger)}) в смс";
        } else {
            die('Error deliver');
        }
    }
}
