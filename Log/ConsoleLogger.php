<?php

namespace loggerLibrary\Log;

use loggerLibrary\Logger;
use loggerLibrary\LoggerSettings;
use loggerLibrary\LoggerInterface;

class ConsoleLogger extends Logger implements LoggerInterface
{

    public function __construct($minLevel)
    {
        $this->minLevel = $minLevel;
    }

    /**
     * Display Log in Console.
     *
     */
    function log($message, $level= null)
    {
        if($level == null)
        {
            $level = $this->defaultLevel;
        }
        echo $level." : ".$message."\n";
    }

}