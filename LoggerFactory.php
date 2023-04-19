<?php

namespace loggerLibrary;
use loggerLibrary\Log\ConsoleLogger;
use loggerLibrary\Log\DbLogger;
use loggerLibrary\Log\MailLogger;
use loggerLibrary\Log\FileLogger;



class LoggerFactory implements LoggerFactoryInterface
{
    public function makeConsoleLogger($settings)
    {
        return new ConsoleLogger($settings);
    }

    public function makeDbLogger($settings)
    {
        return new DbLogger($settings);
    }

    public function makeFileLogger($settings)
    {
        return new FileLogger($settings);
    }

    public function makeMailLogger($settings)
    {
        return new MailLogger($settings);
    }

}