<?php

namespace Classes;

use Interfaces\iFormatLog;

class FormatLog_with_date implements iFormatLog
{
    public function __construct($format, $string)
    {
        $this->format = $format;
        $this->string = $string;
    }

    public function format($logger)
    {
        if ($this->format === 'with_date') {
            return date('Y-m-d H:i:s') . $this->string;
        } else {
            die('Error format');
        }
    }
}
