<?php

namespace loggerLibrary;

class LoggerSettings
{
const LEVELS_NAME = [
'LOG_DEBUG'   => 'Debug',
'LOG_INFO'    => 'Info',
'LOG_WARNING' => 'Warning',
'LOG_ERR'     => 'Error'
];
const LEVELS_PRIORITY = [
'LOG_DEBUG'   => 0,
'LOG_INFO'    => 1,
'LOG_WARNING' => 2,
'LOG_ERR'     => 3
];

const TARGET_LEVEL = [
'Console' => 0,
'File'    => 1,
'Db'      => 2,
'Email'   => 3
];

}