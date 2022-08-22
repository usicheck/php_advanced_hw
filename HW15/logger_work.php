<?php
spl_autoload_register(function($class) {
    $filename = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
    if (!file_exists($filename)){
        throw new Exception("File $class does not exist in path $filename!");
    }
    require_once($filename);
});

use Classes\Logger;
use Classes\Delivery_by_email;
use Classes\Delivery_by_sms;
use Classes\Delivery_to_console;
use Classes\FormatLog_raw;
use Classes\FormatLog_with_date;
use Classes\FormatLog_date_details;






$logger = new Logger(new Delivery_by_email('by_email'),new FormatLog_raw('raw','BlaBla'));
$logger->log();
