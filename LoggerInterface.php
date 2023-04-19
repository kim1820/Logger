<?php

namespace loggerLibrary;

interface LoggerInterface
{

    /**
     *
     * @param string $message
     *
     * @return void
     */
    public function debug($message);

    /**
     *
     * @param string $message
     *
     * @return void
     */
    public function info($message);

    /**
     *
     * @param string $message
     *
     * @return void
     */
    public function warning($message);

    /**
     *
     * @param string $message
     *
     * @return void
     */
    public function error($message);

    /**
     *
     * @param string  $level
     * @param string $message
     *
     * @return void
     */
    public function log($message, $level);

}