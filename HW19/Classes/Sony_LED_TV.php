<?php

namespace Classes;

use interfaces\iItem;

class Sony_LED_TV implements iItem
{
    public function getItem()
    {
        echo 'Hi! I am Sony_LED_TV.';
    }
}
