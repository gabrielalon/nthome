<?php

namespace NetTech\AppBundle\Navigation;

use Framework\Di\InjectionAwareTrait;
use Framework\Mvc\View\TemplateCompiler;
use Phalcon\Config;
use Phalcon\Di\InjectionAwareInterface;
use Phalcon\DiInterface;
use Phalcon\Mvc\Router;
use Phalcon\Tag;

class MenuGenerator
    implements InjectionAwareInterface
{
    use InjectionAwareTrait;

    /**
     * @var array
     */
    private static $menu = [
        'home' => 'Home',
        'about' => 'O firmie',
        'services' => 'Oferta',
        'contact' => 'Kontakt'
    ];

    /**
     * MenuGenerator constructor.
     * @param DiInterface $dependencyInjector
     */
    public function __construct(DiInterface $dependencyInjector)
    {
        $this->setDI($dependencyInjector);
    }

    /**
     * @var string
     */
    private $mode;

    /**
     * @return string
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * @param string $mode
     * @return MenuGenerator
     */
    public function setMode($mode)
    {
        $this->mode = $mode;
        return $this;
    }

    /**
     * @return string
     */
    public function process()
    {
        /** @var Config $config */
        $config = $this->getDI()
            ->getShared('config');

        $templateCompiler = new TemplateCompiler(
            $config->volt->cacheDir,
            realpath(__DIR__ . '/../Resources/views/menu')
        );

        return $templateCompiler
            ->getString(
                $this->getTemplate(),
                [
                    'menu' => MenuGenerator::$menu,
                    'navigation' => $this
                ]
            );
    }

    /**
     * @param $menu
     * @return bool
     */
    public function isActive($menu)
    {
        if (array_key_exists($menu, MenuGenerator::$menu)) {
            /** @var Router $router */
            $router = $this->getDI()
                ->getShared('router');

            if ($router->getActionName() === $menu) {
                return true;
            }

            if ($menu === 'home' && $router->getActionName() === 'index') {
                return true;
            }
        }

        return false;
    }

    /**
     * @param string $for
     * @param string $menu
     * @return string
     */
    public function linkTo($for, $menu)
    {
        return Tag::linkTo([
            ['for' => $for],
            $menu
        ]);
    }

    /**
     * @return string
     */
    protected function getTemplate()
    {
        return sprintf(
            '%s.volt',
            $this->mode
        );
    }
}