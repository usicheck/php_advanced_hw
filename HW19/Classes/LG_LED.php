<?php

namespace Classes;

use interfaces\iItem;
use Abstract_Classes\iLEDTV;

class LG_LED extends iLEDTV
{
    public function createProduct(): iItem
    {
        return new LG_LED_TV();
    }
}
