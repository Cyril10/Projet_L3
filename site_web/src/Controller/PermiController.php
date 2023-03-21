<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Permi;
use App\Form\PermiFormType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;

class PermiController extends AbstractController
{

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    
    #[Route('/permi', name: 'ajoutpermi')]
    public function add(Request $request): Response
    {
        $Permi = new Permi();

        $Permiform = $this->createForm(PermiFormType::class, $Permi);

        $Permiform->handleRequest($request);

        if ($Permiform->isSubmitted() && $Permiform->isValid()) {
            $entityManager = $this->entityManager;
            $entityManager->persist($Permi);
            $entityManager->flush();
            return $this->redirectToRoute('main');

        }

        return $this->render('permi/add.html.twig', [
            'Permiform' => $Permiform->createView()
        ]);
    }





    #[Route('/', name: 'app_permi')]
    public function index(): Response
    {
        return $this->render('permi/index.html.twig', [
            'controller_name' => 'PermiController',
        ]);
    }
}