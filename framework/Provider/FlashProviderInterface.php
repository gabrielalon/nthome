<?php

namespace Framework\Provider;

use Phalcon\Flash\Session as FlashSession;

class FlashProviderInterface extends AbstractServiceProvider
{
    /**
     * The Service name.
     * @var string
     */
    protected $serviceName = 'flash';

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
                $flash = new FlashSession(
                    [
                        "error"   => "alert alert-danger",
                        "success" => "alert alert-success",
                        "notice"  => "alert alert-info",
                        "warning" => "alert alert-warning",
                    ]
                );

                return $flash;
            }
        );
    }
}