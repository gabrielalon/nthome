<?php

include APPLICATION_PATH . '/../vendor/autoload.php';

/**
 * We're a registering a set of namespaces
 */
$loader = new \Phalcon\Loader();
$loader->registerNamespaces([
    'Framework' => dirname(dirname(__FILE__)) . '/framework/',
    'NetTech'  => dirname(dirname(__FILE__)) . '/src/NetTech/'
]);
$loader->register();