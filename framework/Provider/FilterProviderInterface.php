<?php

namespace Framework\Provider;

use Phalcon\Filter;

class FilterProviderInterface extends AbstractServiceProvider
{
    /**
     * The Service name.
     * @var string
     */
    protected $serviceName = 'filter';

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
                return new Filter();
            }
        );
    }
}