<?php
namespace Classes;

use Interfaces\iDeliver;
use Interfaces\iFormatLog;

class Logger
{
    private iDeliver $deliveryType;
    public iFormatLog $formatType;

    public function __construct(iDeliver $deliveryType, iFormatLog $formatType)
    {
        $this->deliveryType = $deliveryType;
        $this->formatType = $formatType;
    }

    public function log()
    {
        return $this->deliveryType->deliver($this);
    }
}
