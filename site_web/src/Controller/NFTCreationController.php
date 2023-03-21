<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\NFTCreation;
use App\Form\NFTformType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;


class NFTCreationController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/ajout', name: 'add')]
    public function add(Request $request): Response
    {
        $NFT = new NFTCreation();

        $NFTform = $this->createForm(NFTformType::class, $NFT);

        $NFTform->handleRequest($request);

        if ($NFTform->isSubmitted() && $NFTform->isValid()) {
            $entityManager = $this->entityManager;
            $entityManager->persist($NFT);
            $entityManager->flush();
            return $this->redirectToRoute('ajoutpermi'); 
        }
 
        return $this->render('nft_creation/add.html.twig', [
            'NFTform' => $NFTform->createView()
        ]);
    }

    #[Route('/', name: 'appnftcreation_index')]
    public function index(): Response
    {
        return $this->render('nft_creation/index.html.twig', [
            'controller_name' => 'NFTCreationController',
        ]);
    }    
}