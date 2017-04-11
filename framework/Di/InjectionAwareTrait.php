<?php

namespace Framework\Di;

use Phalcon\Di;
use Phalcon\DiInterface;

trait InjectionAwareTrait
{
    /**
     * @var Di
     */
    private $di;

    /**
     * @param DiInterface $dependencyInjector
     */
    public function setDI(DiInterface $dependencyInjector)
    {
        $this->di = $dependencyInjector;
    }

    /**
     * @return Di
     */
    public function getDI()
    {
        return $this->di;
    }
}