<?php
namespace Classes;
use interfaces\iItem;
use Abstract_Classes\iLCDTV;

class LG_LCD extends iLCDTV {
    public function createProduct():iItem {
        return new LG_LCD_TV();
    }
}
