<?php

namespace Framework\Provider;

use Phalcon\Mvc\Model\Metadata\Memory;

/**
 * \Framework\Provider\ModelsMetadataServiceProvider
 *
 * @package Framework\Provider
 */
class ModelsMetadataServiceProvider extends AbstractServiceProvider
{
    /**
     * The Service name.
     * @var string
     */
    protected $serviceName = 'modelsMetadata';

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
                $metadata = new Memory();

                return $metadata;
            }
        );
    }
}
