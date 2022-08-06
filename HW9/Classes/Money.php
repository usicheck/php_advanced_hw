<?php

namespace Classes;

use Exception;

class Money
{

    private int|float $amount;
    private string $currency;

    public function __construct($amount, $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function getAmount(): int|float
    {
        return $this->amount;
    }

    public function setCurrency($newCurrency): string
    {
        return $this->currency = $newCurrency;
    }

    public function setAmount($newAmount): int|float
    {
        return $this->amount = $newAmount;
    }

    public function aquals($obj2): bool
    {
        if (($this->getCurrency() === $obj2->getCurrency()) &
            ($this->getAmount() === $obj2->getAmount())) {
            return true;
        } else {
            return false;
        }
    }

    public function add($obj, $obj2)
    {
        if ($obj->currency !== $obj2->currency) {
            try {
                throw new Exception('InvalidArgumentException');
            } catch (Exception $e) {
                $sum = $e->getMessage() . '<br>';
            }
        } else {
            $sum = ($obj->amount) + ($obj2->amount);
        }
        return $sum;
    }
}

$obj = new Money(28, 'EUR');
echo 'Currency of the first object of class Money: ' . '<strong>' . $obj->getCurrency() . '</strong>';
echo '<br>';
echo 'Amount of the first object of class Money: ' . '<strong>' . $obj->getAmount() . '</strong>';
echo '<br>';

echo '<br>';
echo 'Change currency of the first object of class Money: ' . '<strong>' . $obj->setCurrency('USD') . '</strong>';
echo '<br>';
echo 'Change amount of the first object of class Money: ' . '<strong>' . $obj->setAmount('67') . '</strong>';
echo '<br>';

$obj2 = new Money(28, 'USD');
echo '<br>';
echo 'Currency of the second object of class Money: ' . '<strong>' . $obj2->getCurrency() . '</strong>';
echo '<br>';
echo 'Amount of the second object of class Money: ' . '<strong>' . $obj2->getAmount() . '</strong>';
echo '<br>';

echo '<br>';
echo 'Are they equal?';
echo '<br>';
var_dump($obj->aquals($obj2));
echo '<br>';


echo '<br>';
echo 'Get sum (first amount + second amount): ' . '<strong>' . $obj2->add($obj, $obj2) . '</strong>';
