<?php

namespace Framework\Provider;

use Framework\Bootstrap;

class ServiceProviderManager
{
    private function getAll()
    {
        return [
            DebugServiceProvider::class,
            MailerProviderInterface::class,
            ApplicationHelperServiceProvider::class,
            FilterProviderInterface::class,
            FlashProviderInterface::class,
            EventManagerServiceProvider::class,
            ConfigServiceProvider::class,
            DatabaseServiceProvider::class,
            ModelsMetadataServiceProvider::class,
            TagServiceProvider::class,
            EscaperServiceProvider::class,
            SessionServiceProvider::class,
            MvcDispatcherServiceProvider::class,
            VoltTemplateEngineServiceProvider::class,
            PhpTemplateEngineServiceProvider::class,
            ViewServiceProvider::class,
            UrlResolverServiceProvider::class,
            RouterServiceProvider::class,
            ResponseServiceProvider::class,
            RequestServiceProvider::class
        ];
    }

    /**
     * @param Bootstrap $bootstrap
     */
    public function register(Bootstrap $bootstrap)
    {
        foreach ($this->getAll() as $class_name) {

            $reflection = new \ReflectionClass($class_name);
            /** @var ServiceProviderInterface $serviceProvider */
            $serviceProvider = $reflection->newInstance($bootstrap->getDi());
            $serviceProvider->register();

            $bootstrap->appendServiceProvider($serviceProvider);
        }
    }
}