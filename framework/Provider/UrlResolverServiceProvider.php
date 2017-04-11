<?php

namespace Framework\Provider;

use Phalcon\Mvc\Url;

/**
 * \Framework\Provider\UrlResolverServiceProvider
 *
 * @package Framework\Provider
 */
class UrlResolverServiceProvider extends AbstractServiceProvider
{
    /**
     * The Service name.
     * @var string
     */
    protected $serviceName = 'url';

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
                $url = new Url();

                /** @var \Phalcon\DiInterface $this */
                $config = $this->getShared('config')->application;
                $url->setBaseUri($config->baseUri);

                return $url;
            }
        );
    }
}
