<?php

namespace Framework\Provider;

use Framework\Bootstrap;
use Framework\Mvc\Environment;
use Phalcon\Debug;

class DebugServiceProvider extends AbstractServiceProvider
{

    /**
     * The Service name.
     * @var string
     */
    protected $serviceName = 'debug';

    /**
     * Register application service.
     *
     * @return void
     */
    public function register()
    {
        /** @var Bootstrap $bootstrap */
        $bootstrap = $this->getDI()
            ->getShared('bootstrap');

        if ($bootstrap->isOfApplicationEnv(Environment::APPLICATION_DEV)) {

            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);

            $debug = new Debug();
            $debug->listen();
        }
    }
}