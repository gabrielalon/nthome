<?php

namespace Framework\Provider;

use Phalcon\DiInterface;
use Phalcon\Mvc\ViewBaseInterface;
use Phalcon\Mvc\View\Engine\Php as PhpEngine;

/**
 * \Framework\Provider\PhpTemplateEngineServiceProvider
 *
 * @package Framework\Provider
 */
class PhpTemplateEngineServiceProvider extends AbstractServiceProvider
{
    /**
     * The Service name.
     * @var string
     */
    protected $serviceName = 'phpEngine';

    /**
     * Register application service.
     *
     * @return void
     */
    public function register()
    {
        $this->di->setShared(
            $this->serviceName,
            function (ViewBaseInterface $view, DiInterface $di = null) {
                $engine = new PhpEngine($view, $di);

                return $engine;
            }
        );
    }
}
