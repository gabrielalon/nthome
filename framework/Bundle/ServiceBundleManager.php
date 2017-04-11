<?php

namespace Framework\Bundle;

use Framework\Bootstrap;
use Phalcon\Mvc\Application;
use Phalcon\Text;

class ServiceBundleManager
{
    /**
     * @param Application $application
     * @param Bootstrap $bootstrap
     */
    public function register(Application $application, Bootstrap $bootstrap)
    {
        $modules = [];
        foreach ($bootstrap->getRegisteredBundles() as $bundleNamespace => $bundlePath) {
            // get prefix for module
            $bundleNamespaceParts = preg_split("/\\\/", $bundleNamespace);
            $bundleVendorName = array_shift($bundleNamespaceParts);
            $bundleName = array_shift($bundleNamespaceParts);
            $prefix = Text::uncamelize($bundleVendorName . '' . str_replace('Bundle', '', $bundleName), '-');

            $modules[$prefix] = [
                'className' => $bundleNamespace . '\BundleModule',
                'path' => realpath($bootstrap->getApplicationPath() . '\..' . $bundlePath . 'BundleModule.php')
            ];
        }

        // Register modules
        $application->registerModules($modules);
    }
}