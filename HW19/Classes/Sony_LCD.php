<?php

namespace Classes;

use interfaces\iItem;

use Abstract_Classes\iLCDTV;

class Sony_LCD extends iLCDTV
{

    public function createProduct(): iItem
    {
        return new Sony_LCD_TV();
    }
}
