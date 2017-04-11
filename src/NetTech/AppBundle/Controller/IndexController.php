<?php

namespace NetTech\AppBundle\Controller;

use Framework\Http\Controller\BaseController;
use NetTech\AppBundle\Form\ContactForm;
use Phalcon\Mailer\Manager;
use Phalcon\Mvc\View;

class IndexController extends BaseController
{
    /**
     * @return View
     */
    public function indexAction()
    {
        $this->view->setVars(
            [
                'show_slider' => true
            ]
        );
    }

    public function contactAction()
    {
        $form = new ContactForm();
        $data = $this->request->getPost();

        if ( // data where send by post
            $this->request->isPost()

            &&

            // form is valid
            $form->isValid($data)) {

            /** @var Manager $mailer */
            $mailer = $this->getDI()->getShared('mailer');

            $message = $mailer->createMessage()
                ->to('rodemarek@gmail.com', 'Marek Rode')
                ->from($form->getValue('email'), $form->getValue('name'))
                ->subject('Wiadomość')
                ->content($form->getValue('message'));

            $message->send();

            $this->flash->success("Dziękujemy, Twoja wiadomość została wysłana.");
            $form->clear();
        }

        $this->view->setVars([
            'form' => $form,
            'show_map' => true
        ]);
    }
}