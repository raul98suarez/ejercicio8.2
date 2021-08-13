<?php

namespace App\Repository;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class EnviarMail {

    private $mailer;
    public function __construct(MailerInterface $mailer)
    {
     $this->mailer=$mailer;
    }

    public function sendEmail(string $tipo, string $estado)
    {
        $email = (new Email())
            ->from('hello@example.com')
            ->to('you@example.com')
            ->subject('Notification')
            ->text('The '.$tipo.'is '.$estado);

        $this->mailer->send($email);
    }
}