<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{

    #[Route('/check-auth', name: 'check_auth', methods: ['GET'])]
    public function checkAuth(): JsonResponse
    {
        // Aquí debes implementar la lógica para verificar la autenticación del usuario
        // Por ejemplo, verificar si hay un usuario autenticado en el sistema

        if ($this->getUser()) {
            // Si hay un usuario autenticado, devuelve una respuesta 200 OK con un mensaje
            return new JsonResponse(['message' => 'Usuario autenticado'], Response::HTTP_OK);
        } else {
            // Si no hay un usuario autenticado, devuelve una respuesta 401 Unauthorized
            return new JsonResponse(['message' => 'Usuario no autenticado'], Response::HTTP_UNAUTHORIZED);
        }
    }

    #[Route(path: '/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // if ($this->getUser()) {
        //     return $this->redirectToRoute('target_path');
        // }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}
