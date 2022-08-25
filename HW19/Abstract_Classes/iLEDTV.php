<?php
namespace Abstract_Classes;

use interfaces\iTV;
use interfaces\iItem;


abstract class iLEDTV implements iTV {
    abstract public function createProduct():iItem;
    public function type() {
        echo 'LED';
    }
}
