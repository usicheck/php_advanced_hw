<?php

namespace Classes;

use Interfaces\iFormatLog;

class FormatLog_raw implements iFormatLog
{
    public function __construct($format, $string)
    {
        $this->format = $format;
        $this->string = $string;
    }

    public function format($logger)
    {
        if ($this->format === 'raw') {
            return $this->string;
        } else {
            die('Error format');
        }
    }
}
