<?php

namespace Classes;
use Interfaces\iFormatLog;

class FormatLog_date_details implements iFormatLog
{
    public function __construct($format, $string)
    {
        $this->format = $format;
        $this->string = $string;
    }

    public function format($logger)
    {
        if ($this->format === 'with_date_and_details') {
            return date('Y-m-d H:i:s') . $this->string . ' - With some details';
        } else {
            die('Error format');
        }
    }
}
