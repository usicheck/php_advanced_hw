<?php

namespace Classes;

use interfaces\iItem;

class Sony_LCD_TV implements iItem
{
    public function getItem()
    {
        echo 'Hi! I am Sony_LCD_TV.';
    }
}
