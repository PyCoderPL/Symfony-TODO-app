<?php

namespace App\Controller;

use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class MailerController extends AbstractController
{
    #[Route('/mailer/{username}/{useremail}', name: 'app_mailer')]
    public function sendEmail($useremail, $username, MailerInterface $mailer): Response
    {
        $email = (new TemplatedEmail())
            ->to($useremail)
            ->subject('Welcome to TODO app!')

            ->htmlTemplate('mailer/register.html.twig')
            ->context([
                'username' => $username,
                'useremail' => $useremail,
                'expiration_date' => new \DateTime('+7 days')
            ]);

        $mailer->send($email);
        return $this->redirect($this->generateUrl('app_login'));
    }
}
