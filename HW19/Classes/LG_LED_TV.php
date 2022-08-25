<?php

namespace Classes;

use interfaces\iItem;

class LG_LED_TV implements iItem
{
    public function getItem()
    {
        echo 'Hi! I am LG_LED_TV.';
    }
}
