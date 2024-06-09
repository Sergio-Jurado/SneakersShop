<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Encoder\UserPasswordEncoderInterface;

class SecurityController extends AbstractController
{

    #[Route('/check_auth', name: 'check-auth', methods: ['GET'])]
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

    #[Route(path: '/login', name: 'app_login', methods: ['POST'])]
    public function login(Request $request, UserPasswordHasherInterface $passwordEncoder, UserRepository $userRepository): Response
    {
        $username = $request->request->get('username') ?? '';
        $password = $request->request->get('password') ?? '';
        $user = $userRepository->findOneBy(['username' => $username]);

        if (!$username || !$password) {
            return new JsonResponse(['message' => 'Faltan credenciales'], JsonResponse::HTTP_BAD_REQUEST);
        }

        if (!$user || !$passwordEncoder->isPasswordValid($user, $password)) {
            return new JsonResponse(['message' => 'Credenciales inválidas'], JsonResponse::HTTP_UNAUTHORIZED);
        }

        return new JsonResponse(['message' => 'Inicio de sesión exitoso']);
    }


    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}