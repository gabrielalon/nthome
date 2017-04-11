<?php

namespace Framework\Provider;

use Phalcon\Mvc\Dispatcher;

/**
 * \Framework\Provider\MvcDispatcherServiceProvider
 *
 * @package Framework\Provider
 */
class MvcDispatcherServiceProvider extends AbstractServiceProvider
{
    /**
     * The Service name.
     * @var string
     */
    protected $serviceName = 'dispatcher';

    /**
     * This namespace is applied to the controller routes in your routes file.
     * @var string
     */
    protected $namespace = 'NetTech\AppBundle\Controller';

    /**
     * Register application service.
     *
     * @return void
     */
    public function register()
    {
        $namespace = $this->namespace;

        $this->di->setShared(
            $this->serviceName,
            function () use ($namespace) {
                $dispatcher = new Dispatcher();
                $dispatcher->setDefaultNamespace($namespace);

                return $dispatcher;
            }
        );
    }
}
