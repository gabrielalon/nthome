<?php

namespace NetTech\BlogBundle\Controller;

use Framework\Http\Controller\BaseController;
use Phalcon\Mvc\View;

class BlogController extends BaseController
{
    /**
     * @return View
     */
    public function aboutAction()
    {
        $this->addPageTitle('stats', 'O firmie');
    }
    /**
     * @return View
     */
    public function servicesAction()
    {
        $this->addPageTitle('settings', 'Oferta');
    }
}