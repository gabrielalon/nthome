<?php

namespace Framework\Provider;

use Framework\Mvc\ApplicationHelper;

class ApplicationHelperServiceProvider extends AbstractServiceProvider
{
    /**
     * The Service name.
     * @var string
     */
    protected $serviceName = 'helper';

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
                return new ApplicationHelper();
            }
        );
    }
}