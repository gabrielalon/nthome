<?php

namespace Framework\Provider;

use Phalcon\Escaper;

/**
 * \Framework\Provider\EscaperServiceProvider
 *
 * @package Framework\Provider
 */
class EscaperServiceProvider extends AbstractServiceProvider
{
    /**
     * The Service name.
     * @var string
     */
    protected $serviceName = 'escaper';

    /**
     * Register application service.
     *
     * @return void
     */
    public function register()
    {
        $this->di->setShared($this->serviceName, Escaper::class);
    }
}
