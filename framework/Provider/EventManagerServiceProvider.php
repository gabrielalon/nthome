<?php

namespace Framework\Provider;

use Phalcon\Events\Manager;

/**
 * \Framework\Provider\EventManagerServiceProvider
 *
 * @package Framework\Provider
 */
class EventManagerServiceProvider extends AbstractServiceProvider
{
    /**
     * The Service name.
     * @var string
     */
    protected $serviceName = 'eventsManager';

    /**
     * Register application service.
     *
     * @return void
     */
    public function register()
    {
        $this->di->setShared(
            $this->serviceName,
            function () {
                $em = new Manager();
                $em->enablePriorities(true);

                return $em;
            }
        );
    }
}
