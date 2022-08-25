<?php

namespace Classes;

use interfaces\iItem;

class LG_LCD_TV implements iItem
{
    public function getItem()
    {
        echo 'Hi! I am LG_LCD_TV.';
    }
}
