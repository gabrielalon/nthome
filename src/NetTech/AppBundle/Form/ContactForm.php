<?php

namespace NetTech\AppBundle\Form;

use Phalcon\Forms\Element\TextArea;
use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Validation\Message;
use Phalcon\Validation\Validator\Email;
use Phalcon\Validation\Validator\PresenceOf;
use Phalcon\Validation\Validator\StringLength;

class ContactForm extends Form
{
    public function initialize()
    {
        // Set the same form as entity
        $this->setEntity($this);

        $name = new Text(
            "name"
        );
        $name->setLabel('Nazwa');

        $name->addValidator(
            new PresenceOf(
                [
                    "message" => "Nazwa jest wymagana.",
                ]
            )
        );

        $name->addValidator(
            new StringLength(
                [
                    "min" => 3,
                    "messageMinimum" => "Nazwa jest zbyt krótka. Minimum 3 znaki.",
                ]
            )
        );

        $name->setFilters(
            [
                "string",
                "trim",
            ]
        );

        $this->add($name);

        $mail = new Text(
            "email"
        );
        $mail->setLabel('Email');

        $mail->setFilters(
            [
                "string",
                "trim",
            ]
        );

        $mail->addValidator(
            new Email(
                [
                    "message" => "Proszę podać poprawny adres email.",
                ]
            )
        );

        $mail->addValidator(
            new PresenceOf(
                [
                    "message" => "Email jest wymagana.",
                ]
            )
        );

        $this->add($mail);

        $message = new TextArea('message', [
            'class' => 'input-xlarge',
            'tabindex' => 3,
            'rows' => 7
        ]);
        $message->setLabel('Wiadomość');

        $message->setFilters(
            [
                "string",
                'striptags',
                "trim",
            ]
        );

        $message->addValidator(
            new PresenceOf(
                [
                    "message" => "Wiadomość jest wymagana.",
                ]
            )
        );

        $message->addValidator(
            new StringLength(
                [
                    "min" => 3,
                    "messageMinimum" => "Proszę podać treść wiadomości. Minimum 3 znaki.",
                ]
            )
        );

        $this->add($message);

//        // Add a text element to put a hidden CSRF
//        $this->add(
//            new Hidden(
//                "csrf"
//            )
//        );
    }

    public function renderDecorated($name)
    {
        echo '<div class="clearfix">';

        $element  = $this->get($name);

        $messages = [];
        /** @var Message $message */
        foreach ($this->getMessagesFor($element->getName()) as $message) {
            array_push(
                $messages,
                $message->getMessage()
            );
        }

        echo '<label for="', $element->getName(), '">', $element->getLabel(), ":</label>";

        echo '<div class="input">';

        echo $element;

        if ($messages) {
            echo '<div class="messages alert alert-error">' . implode('<br />', $messages) . '</div>';
        }

        echo "</div>";

        echo "</div>";
    }
}