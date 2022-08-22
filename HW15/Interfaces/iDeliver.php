<?php
namespace Interfaces;

use Classes\Logger;

interface iDeliver
{
    public function __construct($delivery);
    public function deliver(Logger $logger);
}
