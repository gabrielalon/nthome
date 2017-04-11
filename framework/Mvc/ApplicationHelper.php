<?php

namespace Framework\Mvc;

use Framework\Mvc\View\TemplateCompiler;
use NetTech\AppBundle\Navigation\MenuGenerator;
use Phalcon\Config;
use Phalcon\Mvc\User\Component;

class ApplicationHelper extends Component
{
    /**
     * @param string $mode
     * @return string
     */
    public function getMenu($mode)
    {
        $menuGenerator = new MenuGenerator($this->getDI());
        $menuGenerator->setMode($mode);

        return $menuGenerator->process();
    }
}