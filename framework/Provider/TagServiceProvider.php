<?php

namespace Framework\Provider;

use Phalcon\Tag;

/**
 * \Framework\Provider\TagServiceProvider
 *
 * @package Framework\Services
 */
class TagServiceProvider extends AbstractServiceProvider
{
    /**
     * The Service name.
     * @var string
     */
    protected $serviceName = 'tag';

    /**
     * Register application service.
     *
     * @return void
     */
    public function register()
    {
        $this->di->setShared($this->serviceName, Tag::class);
    }
}
