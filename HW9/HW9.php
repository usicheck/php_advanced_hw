<?php

//use Classes\Money;
//use Classes\Currency;

//require_once 'Classes/Currency.php';
//require_once 'Classes/Money.php';
//spl_autoload_register();

 spl_autoload_register(function($class) {
    $filename = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
    if (!file_exists($filename)){
        throw new Exception("File $class does not exist in path $filename!");
    }
    require_once($filename);
});

use Classes\Currency;


try {
    $currency = new Classes\Currency('USD');
    $currency->setIsoCode('EUR');
    echo 'First object of class Currency: ' . '<strong>' . $currency->getIsoCode() . '</strong>';
    echo '<br>';

    $currency1 = new Classes\Currency('EUR');
    echo 'Second object of class Currency: ' . '<strong>' . $currency1->getIsoCode() . '</strong>';
    echo '<br>';

    echo '<br>';
    echo 'Are they equal?';
    echo '<br>';
    var_dump($currency1->equals($currency));
} catch (Exception $e) {
    var_dump($e->getMessage());
}

try {
    $obj = new Classes\Money(45, $currency);
    echo '<pre>';
    print_r($obj);
    echo '</pre>';


    echo 'First object of class Money: ';
    echo '<pre>';
    print_r($obj);
    echo '</pre>';

    $obj->setAmount('28');
    echo 'Change amount of the first object of class Money: ' . '<strong>' . $obj->getAmount() . '</strong>';
    echo '<br>';

    echo '<pre>';
    print_r($obj);
    echo '</pre>';


    $obj1 = new Classes\Money(28, $currency1);
    echo '<br>';
    echo 'Second object of class Money: ';
    echo '<pre>';
    print_r($obj1);
    echo '</pre>';

    echo '<br>';
    echo 'Are objects of Money equal?';
    echo '<br>';
    var_dump($obj1->aquals($obj));
    echo '<br>';


    echo '<br>';
    echo 'Get sum (first amount + second amount): ' . '<strong>' . $obj1->add($obj) . '</strong>';
} catch (Exception $e) {
    var_dump($e->getMessage()) . '<br>';
}


