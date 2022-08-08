<?php

namespace Classes;

use Exception;

class Currency
{
    private string $isoCode;
    private array $isoCodeArr = ['USD', 'EUR', 'UAH'];

    public function __construct(string $isoCode)
    {
        $this->setIsoCode($isoCode);
    }

    public function getIsoCode(): string
    {
        return $this->isoCode;
    }

    public function setIsoCode(string $code)
    {
        if (!in_array($code, $this->isoCodeArr)) {
            throw new Exception('InvalidArgumentException');
        }
        $this->isoCode = $code;
    }

    public function equals($currency): bool
    {
        return $this->getIsoCode() === $currency->getIsoCode();
    }
}

