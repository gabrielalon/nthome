<?php

namespace Framework\Provider;

use Phalcon\Session\Adapter\Files;

/**
 * \Framework\Provider\SessionServiceProvider
 *
 * @package Framework\Provider
 */
class SessionServiceProvider extends AbstractServiceProvider
{
    /**
     * The Service name.
     * @var string
     */
    protected $serviceName = 'session';

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
                $session = new Files();
                $session->start();

                return $session;
            }
        );
    }
}
