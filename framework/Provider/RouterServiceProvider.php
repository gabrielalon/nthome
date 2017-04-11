<?php

namespace Framework\Provider;

use Framework\Bootstrap;
use Framework\Mvc\ModuleRouteInterface;
use Phalcon\Mvc\Router;

/**
 * \Framework\Provider\PhpTemplateEngineServiceProvider
 *
 * @package Framework\Provider
 */
class RouterServiceProvider extends AbstractServiceProvider
{
    /**
     * The Service name.
     * @var string
     */
    protected $serviceName = 'router';

    /**
     * Register application service.
     *
     * @return void
     */
    public function register()
    {
        $this->di->setShared(
            $this->getName(),
            function () {

                $router = new Router($defaultRoutes = false);

                /** @var \Phalcon\DiInterface  $this */
                /** @var Bootstrap $bootstrap */
                $bootstrap = $this->getShared('bootstrap');

                foreach ($bootstrap->getRegisteredBundles() as $bundleNamespace => $bundlePath) {

                    $class = $bundleNamespace . '\\BundleModule';
                    $reflection = new \ReflectionClass($class);

                    if ($reflection->implementsInterface(ModuleRouteInterface::class)) {

                        /** @var ModuleRouteInterface $route */
                        $route = $reflection->newInstanceWithoutConstructor();
                        $route->registerRoutes($router);
                    }
                }

                return $router;
            }
        );
    }
}
