<?php

namespace Framework\Provider;

use Phalcon\Di\InjectionAwareInterface;

/**
 * \Framework\Provider\ServiceProviderInterface
 *
 * @package Framework\Provider
 */
interface ServiceProviderInterface extends InjectionAwareInterface
{
    /**
     * Register application service.
     *
     * @return mixed
     */
    public function register();

    /**
     * Gets the Service name.
     *
     * @return string
     */
    public function getName();
}
