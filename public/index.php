<?php

use Guild\Mvc\Application;
#use Zend\Stdlib\ArrayUtils;

/**
 * This makes our life easier when dealing with paths. Everything is relative
 * to the application root now.
 */
chdir(dirname(__DIR__));

// Composer autoloading
include __DIR__ . '/../vendor/autoload.php';

// Retrieve configuration
$appConfig = require __DIR__ . '/../config/application.config.php';

// Run the application!
$application = new Application($appConfig);
$application->run();
