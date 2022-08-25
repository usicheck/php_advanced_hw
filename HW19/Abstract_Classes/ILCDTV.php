<?php

namespace Abstract_Classes;
use interfaces\iTV;
use interfaces\iItem;


abstract class iLCDTV implements iTV {
    abstract public function createProduct():iItem;
    public function type() {
        echo 'LCD';
    }
}
