<?php

require_once __DIR__ . '/vendor/autoload.php';

use \Mini\Core\Application;

use \Monolog\Logger;
use \Monolog\Handler\StreamHandler;

//Monolog Test
// $log = new Logger('mini');
// $log->pushHandler(new StreamHandler('./log.log', Logger::ERROR));
// $log->critical('oh men');


Application::run();
