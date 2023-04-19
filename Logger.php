<?php

namespace loggerLibrary;
use loggerLibrary\Log\ConsoleLogger;
use loggerLibrary\LoggerFactory;


class Logger implements LoggerInterface
{
    protected $minLevel;
    protected $defaultLevel = LoggerSettings::LEVELS_NAME['LOG_DEBUG'];


    /**
     * Attempts to return a concrete Log instance of type Logger.
     *
     * @param string $target    the target we want our logsto be displayed or used in.
     *
     *
     * @param string $minLevel     by Default i put here Debug for all targets.
     *
     * @return Logger           return the needed instance of Logger
     *
     */
    public function createLogger($target, $minLevel = LoggerSettings::LEVELS_NAME["LOG_DEBUG"])
    {
        $logger = new LoggerFactory();
        // Here we can make it better by looping through an existing array with all possible Targets
        switch ($target) {
            case "File":
                return $logger->makeFileLogger($minLevel);
            case "Mail":
                return $logger->makeMailLogger($minLevel);
            case "DB":
                return $logger->makeDbLogger($minLevel);
        }
        return $logger->makeConsoleLogger($minLevel);
    }


    public function debug($message)
    {
        return $this->log($message, LoggerSettings::LEVELS_NAME["LOG_DEBUG"]);
    }

    public function info($message)
    {
        return $this->log($message, LoggerSettings::LEVELS_NAME["LOG_INFO"]);
    }

    public function warning($message)
    {
        return $this->log($message, LoggerSettings::LEVELS_NAME["LOG_WARNING"]);
    }

    public function error($message)
    {
        return $this->log($message, LoggerSettings::LEVELS_NAME["LOG_ERR"]);
    }

    /**
     * Abstract implementation of the log() method.
     *
     */
    function log($message, $level= null)
    {
        return false;
    }

    /**
     * set The Minimum Level for a givel Logger Object.
     *
     */
    function setMinLevel($level)
    {
        $this>$this->minLevel = $level;
    }

    /**
     * Get The Minimum Level for a givel Logger Object.
     *
     */
    function gettMinLevel(Logger $logger)
    {
        return $logger->minLevel;
    }
}
