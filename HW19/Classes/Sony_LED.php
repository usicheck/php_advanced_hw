<?php

namespace Classes;

use interfaces\iItem;
use Abstract_Classes\iLEDTV;

class Sony_LED extends iLEDTV
{
    public function createProduct(): iItem
    {
        return new Sony_LED_TV();
    }
}
