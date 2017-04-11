<?php

namespace Framework\Mvc;

interface ModuleRouteInterface
{
    /**
     * Register bundle custom routes
     *
     * @param \Phalcon\Mvc\Router $router
     * @return mixed
     */
    public static function registerRoutes(\Phalcon\Mvc\Router $router);
}
