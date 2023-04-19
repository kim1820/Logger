<?php

namespace loggerLibrary;

interface LoggerFactoryInterface
{
    public function makeConsoleLogger($settings);

    public function makeDbLogger($settings);

    public function makeFileLogger($settings);

    public function makeMailLogger($settings);
}