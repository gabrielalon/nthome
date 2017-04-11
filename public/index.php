<?php

// Define path to application directory
defined('APPLICATION_PATH')
    || define('APPLICATION_PATH',
        realpath(dirname(__FILE__) . '/../app'));

// Define application environment
defined('APPLICATION_ENV')
    || define('APPLICATION_ENV',
        require APPLICATION_PATH . '/config/framework_env.php');

include APPLICATION_PATH . '/autoload.php';

try {

    echo (new \Framework\Bootstrap(
        APPLICATION_PATH,
        APPLICATION_ENV
        ))
        ->registerBundles([
            'NetTech\\AppBundle' => '/src/NetTech/AppBundle/',
            'NetTech\\BlogBundle' => '/src/NetTech/BlogBundle/'
        ])
        ->run();

} catch (\Exception $e) {
    // Display exception
    echo get_class($e), ": ", $e->getMessage(), "\n";
    echo " File=", $e->getFile(), "\n";
    echo " Line=", $e->getLine(), "\n";
    echo $e->getTraceAsString();
}

