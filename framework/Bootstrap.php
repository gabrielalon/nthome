<?php

namespace Framework;

use Framework\Bundle\ServiceBundleManager;
use Framework\Provider\ServiceProviderInterface;
use Framework\Provider\ServiceProviderManager;
use Phalcon\Di;
use Phalcon\DiInterface;
use Phalcon\Http\Response;
use Phalcon\Mvc\Application;

class Bootstrap
{
    /**
     * The Dependency Injector.
     *
     * @var DiInterface
     */
    protected $di;

    /**
     * The Application path.
     *
     * @var bool|string
     */
    protected $applicationPath = APPLICATION_PATH;

    /**
     * The Application environment;
     *
     * @var string
     */
    protected $applicationEnv = APPLICATION_ENV;

    /**
     * The Service Provider.
     *
     * @var ServiceProviderInterface[]
     */
    protected $serviceProviders = [];

    /**
     * Registered Bundles
     *
     * @var array
     */
    protected $registeredBundles = [];

    /**
     * Bootstrap constructor.
     *
     * @param bool|string $applicationPath
     * @param mixed $applicationEnv
     */
    public function __construct($applicationPath = APPLICATION_PATH, $applicationEnv = APPLICATION_ENV)
    {
        $this->di = new Di();
        $this->applicationPath = $applicationPath;
        $this->applicationEnv = $applicationEnv;

        $this->di->setShared('bootstrap', $this);
        Di::setDefault($this->di);
    }

    /**
     * Gets the Dependency Injector.
     *
     * @return Di
     */
    public function getDi()
    {
        return $this->di;
    }

    /**
     * Gets the Application path.
     *
     * @return string
     */
    public function getApplicationPath()
    {
        return $this->applicationPath;
    }

    /**
     * Gets the Application env.
     *
     * @return string
     */
    public function getApplicationEnv()
    {
        return $this->applicationEnv;
    }

    /**
     * Checks the Application env.
     *
     * @param string $environment
     * @return bool
     */
    public function isOfApplicationEnv($environment)
    {
        return $this->getApplicationEnv() === $environment;
    }

    /**
     * Runs the Application
     *
     * @return string
     */
    public function run()
    {
        $this->initializeServices();

        $app = new Application();
        $app->setEventsManager($this->di->getShared('eventsManager'));
        $app->setDI($this->di);

        $serviceBundleManager = new ServiceBundleManager();
        $serviceBundleManager->register($app, $this);

        /* @var $response Response */
        $response = $app->handle();
        return $response->getContent();
    }

    /**
     * Initialize Services in the Dependency Injector Container.
     */
    protected function initializeServices()
    {
        $serviceProviderManager = new ServiceProviderManager();
        $serviceProviderManager->register($this);
    }

    /**
     * Appends Service Provider
     *
     * @param ServiceProviderInterface $serviceProvider
     */
    public function appendServiceProvider(ServiceProviderInterface $serviceProvider)
    {
        $this->serviceProviders[$serviceProvider->getName()] = $serviceProvider;
    }

    /**
     * Add new bundles with array:
     *  'Namespace\\NameBundle' => 'path/to/src/',
     *
     * @param array $bundles
     * @return $this
     */
    public function registerBundles($bundles = [])
    {
        $this->registeredBundles = $bundles;

        return $this;
    }

    /**
     * Gets registered bundles.
     *
     * @return array
     */
    public function getRegisteredBundles()
    {
        return $this->registeredBundles;
    }
}