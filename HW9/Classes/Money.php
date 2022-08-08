<?php

namespace Classes;

use Classes\Currency;
use Exception;

require_once __DIR__.'/Currency.php';

class Money
{
    private int|float $amount;
    private Currency $currency;

    public function __construct(int|float $amount, Currency $currency)
    {
        $this->setAmount($amount);
        $this->setCurrency($currency);
    }

    public function getCurrency(): Currency
    {
        return $this->currency;
    }

    public function getAmount(): int|float
    {
        return $this->amount;
    }

    public function setAmount($newAmount)
    {
        $this->amount = $newAmount;
    }

    public function setCurrency(Currency $currency)
    {
        $this->currency = $currency;
    }

    public function aquals($obj): bool
    {
        return ($this->getCurrency() == $obj->getCurrency()) &
            ($this->getAmount() == $obj->getAmount());
    }

    public function add($obj): int|float
    {
        if ($this->currency != $obj->currency) {
            throw new Exception('InvalidArgumentException');
        } else {
            $sum = ($this->amount) + ($obj->amount);
        }
        return $sum;
    }
}

