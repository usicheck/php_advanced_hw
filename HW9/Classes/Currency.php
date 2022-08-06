<?php

namespace Classes;

use Exception;

class Currency
{
    private string $isoCode;
    private array $isoCodeArr = ['USD', 'EUR', 'UAH'];

    public function __construct($isoCode)
    {
        $this->isoCode = $isoCode;
    }

    public function getIsoCode(): string
    {
        return $this->setIsoCode();
    }

    public function setIsoCode(): string
    {
        $arr = [];
        foreach ($this->isoCodeArr as $value) {
            if ($this->isoCode == $value) {
                $arr = $value;
            }
            if (empty($arr)) {
                try {
                    throw new Exception('InvalidArgumentException');
                } catch (Exception $e) {
                    $arr = $e->getMessage();
                }
            }
        }
        return $arr;
    }

    public function equals($currency): bool
    {
        if ($this->getIsoCode() === $currency->getIsoCode()) {
            return true;
        } else {
            return false;
        }
    }
}

$currency = new Currency('EUR');
echo 'First object of class Currency: ' . '<strong>' . $currency->getIsoCode() . '</strong>';
echo '<br>';

$currency1 = new Currency('EUR');
echo 'Second object of class Currency: ' . '<strong>' . $currency1->getIsoCode() . '</strong>';
echo '<br>';

echo '<br>';
echo 'Are they equal?';
echo '<br>';
var_dump($currency1->equals($currency));
