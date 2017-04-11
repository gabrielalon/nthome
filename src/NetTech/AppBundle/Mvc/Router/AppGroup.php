<?php

namespace NetTech\AppBundle\Mvc\Router;

use Phalcon\Di;
use Phalcon\Mvc\Router\Group as RouterGroup;

class AppGroup extends RouterGroup
{
    public function initialize()
    {
        // Default paths
        $this->setPaths(
            [
                "module"    => "net-tech-app",
                "namespace" => "NetTech\\AppBundle\\Controller",
            ]
        );

        $config = Di::getDefault()->getShared('config');

        // Add a route to the group
        $route = $this->addGet(
            $config->application->baseUri,
            [
                "controller" => "index",
                "action" => "index",
            ]
        );
        $route->setName('home');

        // Add a route to the group
        $route = $this->add(
            '/contact',
            [
                "controller" => "index",
                "action" => "contact",
            ]
        );
        $route->setName('contact');
    }
}