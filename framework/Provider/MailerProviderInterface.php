<?php

namespace Framework\Provider;

use Phalcon\Config;
use Phalcon\Mailer\Manager;

class MailerProviderInterface extends AbstractServiceProvider
{
    /**
     * The Service name.
     * @var string
     */
    protected $serviceName = 'mailer';

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
                /** @var Config $config */
                $config = $this->getShared('config')->mailer;

                return new Manager($config->toArray());
            }
        );
    }
}