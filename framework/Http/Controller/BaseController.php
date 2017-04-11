<?php

namespace Framework\Http\Controller;

use Phalcon\Mvc\Controller;

class BaseController extends Controller
{
    public function initialize()
    {
        $this->tag->setTitle('Net Tech');
    }

    /**
     * @param string $icon
     * @param string $title
     */
    public function addPageTitle($icon, $title)
    {
        $this->tag->appendTitle(' | ' . $title);
        $this->view->setVars([
            'page_icon' => $icon,
            'page_title' => $title
        ]);
    }
}