<?php

namespace NetTech\BlogBundle\Mvc\Router;

use Phalcon\Di;
use Phalcon\Mvc\Router\Group as RouterGroup;

class BlogGroup extends RouterGroup
{
    public function initialize()
    {
        // Default paths
        $this->setPaths(
            [
                "module"    => "net-tech-blog",
                "namespace" => "NetTech\\BlogBundle\\Controller",
            ]
        );

        $route = $this->addGet(
            "/about",
            [
                "controller" => "blog",
                "action" => "about",
            ]
        );
        $route->setName('about');

        $route = $this->addGet(
            "/services",
            [
                "controller" => "blog",
                "action" => "services",
            ]
        );
        $route->setName('services');
    }
}