<?php
namespace Interfaces;
use Classes\Logger;

interface iFormatLog
{
    public function __construct($format, $string);
    public function format(Logger $logger);
}
