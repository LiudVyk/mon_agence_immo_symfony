<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController{


    /**
     * @Route("/login", name="login")
     */
    public function login(AuthenticationUtils $authenticationUtils){

            $error = $authenticationUtils->getLastAuthenticationError(); //méthode permettant de récupérer les erreurs
            $lastUsername = $authenticationUtils->getLastUsername(); //méthode permettantd e récupérer le dernier nom d'utilisateur saisi

        return $this->render('security/login.html.twig',[
            'last_username' => $lastUsername,
            'error' => $error
        ]);

    }

}