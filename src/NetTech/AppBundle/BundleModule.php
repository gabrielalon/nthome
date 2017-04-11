<?php

namespace NetTech\AppBundle;

use Framework\Mvc\ModuleRouteInterface;
use NetTech\AppBundle\Mvc\Router\AppGroup;
use Phalcon\Loader;
use Phalcon\Mvc\ModuleDefinitionInterface;
use Phalcon\Mvc\View;

class BundleModule
    implements ModuleDefinitionInterface,
        ModuleRouteInterface
{
    /**
     * {@inheritdoc}
     */
    public function registerAutoloaders(\Phalcon\DiInterface $dependencyInjector = null)
    {
        $loader = new Loader();

        $loader->registerNamespaces(
            [
                'NetTech\AppBundle' => __DIR__
            ]
        );

        $loader->register();
    }

    /**
     * {@inheritdoc}
     */
    public function registerServices(\Phalcon\DiInterface $dependencyInjector)
    {
        /* @var $view View */
        $view = $dependencyInjector->getShared('view');
        $view->setViewsDir(__DIR__ . '/Resources/views/');
        $view->setLayout('index');
        return $view;
    }

    /**
     * {@inheritdoc}
     */
    public static function registerRoutes(\Phalcon\Mvc\Router $router)
    {
        $router->mount(new AppGroup());
    }
}