<?php

namespace Framework\Provider;

use Phalcon\Http\Response;

/**
 * \Framework\Provider\ResponseServiceProvider
 *
 * @package Framework\Provider
 */
class ResponseServiceProvider extends AbstractServiceProvider
{
    /**
     * The Service name.
     * @var string
     */
    protected $serviceName = 'response';

    /**
     * Register application service.
     *
     * @return void
     */
    public function register()
    {
        $this->di->setShared($this->getName(), Response::class);
    }
}
