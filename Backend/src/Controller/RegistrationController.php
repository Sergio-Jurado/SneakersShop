<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Security\LoginAuthenticator;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;

class RegistrationController extends AbstractController
{
    #[Route('/register', name: 'app_register')]
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, Security $security, EntityManagerInterface $entityManager): Response
    {
        $userData = json_decode($request->getContent(), true);

    $user = new User();
    $user->setUsername($userData['username']);
    $user->setName($userData['name']);
    $user->setLastName($userData['lastName']);

    // Hash the password
    $hashedPassword = $userPasswordHasher->hashPassword($user, $userData['password']);
    $user->setPassword($hashedPassword);

    // Persist the user
    $entityManager->persist($user);
    $entityManager->flush();

    // Return a success response
    return new Response('User registered successfully', Response::HTTP_CREATED);
    }
}
