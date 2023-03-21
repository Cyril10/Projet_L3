<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Contact;
use App\Form\ContactFormType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;


class ContactController extends AbstractController
{

    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/contact', name: 'formcontact')]
    public function add(Request $request): Response
    {
        $Contact = new Contact();

        $ContactForm = $this->createForm(ContactFormType::class, $Contact);

        $ContactForm->handleRequest($request);

        if ($ContactForm->isSubmitted() && $ContactForm->isValid()) {
            $entityManager = $this->entityManager;
            $entityManager->persist($Contact);
            $entityManager->flush();
            return $this->redirectToRoute('main'); 
        }
 
        return $this->render('contact/add.html.twig', [
            'ContactForm' => $ContactForm->createView()
        ]);
    }



    #[Route('/a', name: 'app_contact')]
    public function index(): Response
    {
        return $this->render('contact/index.html.twig', [
            'controller_name' => 'ContactController',
        ]);
    }
}