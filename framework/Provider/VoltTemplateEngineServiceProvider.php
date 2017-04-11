<?php

namespace Framework\Provider;

use Framework\Bootstrap;
use Framework\Mvc\Environment;
use Phalcon\DiInterface;
use Phalcon\Mvc\View\Engine\Volt;
use Phalcon\Mvc\ViewBaseInterface;

/**
 * \Framework\Provider\VoltTemplateEngineServiceProvider
 *
 * @package Framework\Provider
 */
class VoltTemplateEngineServiceProvider extends AbstractServiceProvider
{
    /**
     * The Service name.
     * @var string
     */
    protected $serviceName = 'voltEngine';

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
                /** @var \Phalcon\DiInterface $this */
                $config = $this->getShared('config')->volt;
                /** @var Bootstrap $bootstrap */
                $bootstrap = $this->getShared('bootstrap');

                $volt = new Volt($view, $di);
                $volt->setOptions(
                    [
                        'compiledPath' => $config->cacheDir,
                        'compiledSeparator' => $config->compiledSeparator,
                        'stat' => true,
                        'compileAlways' => $bootstrap->isOfApplicationEnv(Environment::APPLICATION_DEV)
                    ]
                );

                return $volt;
            }
        );
    }
}
