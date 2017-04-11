<?php

namespace Framework\Provider;

use Phalcon\Http\Request;

/**
 * \Framework\Provider\RequestServiceProvider
 *
 * @package Framework\Provider
 */
class RequestServiceProvider extends AbstractServiceProvider
{
    /**
     * The Service name.
     * @var string
     */
    protected $serviceName = 'request';

    /**
     * Register application service.
     *
     * @return void
     */
    public function register()
    {
        $this->di->setShared($this->getName(), Request::class);
    }
}
