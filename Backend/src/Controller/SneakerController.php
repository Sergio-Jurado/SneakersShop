<?php

namespace App\Controller;

use App\Entity\Photo;
use App\Entity\Sneaker;
use App\Form\SneakerType;
use App\Repository\SneakerRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/sneaker')]
class SneakerController extends AbstractController
{
    #[Route('/', name: 'app_sneaker_index', methods: ['GET'])]
    public function index(SneakerRepository $sneakerRepository): Response
    {
        return $this->render('sneaker/index.html.twig', [
            'sneakers' => $sneakerRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_sneaker_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $sneaker = new Sneaker();
        $form = $this->createForm(SneakerType::class, $sneaker);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $entityManager->persist($sneaker);
            $entityManager->flush();

            return $this->redirectToRoute('app_sneaker_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('sneaker/new.html.twig', [
            'sneaker' => $sneaker,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_sneaker_show', methods: ['GET'])]
    public function show(Sneaker $sneaker): Response
    {
        return $this->render('sneaker/show.html.twig', [
            'sneaker' => $sneaker,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_sneaker_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Sneaker $sneaker, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(SneakerType::class, $sneaker);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_sneaker_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('sneaker/edit.html.twig', [
            'sneaker' => $sneaker,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_sneaker_delete', methods: ['POST'])]
    public function delete(Request $request, Sneaker $sneaker, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$sneaker->getId(), $request->getPayload()->get('_token'))) {
            $entityManager->remove($sneaker);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_sneaker_index', [], Response::HTTP_SEE_OTHER);
    }
}
