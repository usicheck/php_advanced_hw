<?php
spl_autoload_register();

use Classes\LG_LCD;
use Classes\LG_LED;
use Classes\Sony_LCD;
use Classes\Sony_LED;
use interfaces\iTV;

function clientCode(iTV $TV)
{
    $TV_Type = $TV->createProduct();
    echo $TV_Type->getItem() . "\n";
}

clientCode(new Sony_LED());
clientCode(new Sony_LCD());

clientCode(new LG_LED());
clientCode(new LG_LCD());
