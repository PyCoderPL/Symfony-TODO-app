<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserRegisterType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;

class SecurityController extends AbstractController
{
    #[Route(path: '/register', name: 'app_register')]
    public function register(
        Request $request,
        EntityManagerInterface $em,
        UserPasswordHasherInterface $hasherInterface,
        MailerInterface $mailer
    ) {
        $user = new User();
        $form = $this->createForm(UserRegisterType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $password = $form->get('password')->getData();
            $user->setPassword($hasherInterface->hashPassword($user, $password));

            $em->persist($user);
            $em->flush();
            $this->addFlash('login_notice', 'Registration success!');

            $email = (new TemplatedEmail())
                ->to($user->getEmail())
                ->subject('Welcome to TODO app!')
                ->htmlTemplate('mailer/register.html.twig')
                ->context([
                    'username' => $user->getUsername(),
                    'useremail' => $user->getEmail(),
                    'expiration_date' => new \DateTime('+7 days')
                ]);
            $mailer->send($email);

            return $this->redirect($this->generateUrl('app_login'));
        }
        return $this->render(view: 'security/register.html.twig', parameters: [
            'form' => $form
        ]);
    }

    #[Route(path: '/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}
