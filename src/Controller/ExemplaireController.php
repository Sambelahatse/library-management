<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExemplaireController extends AbstractController
{
    #[Route('/exemplaire', name: 'app_exemplaire')]
    public function index(): Response
    {
        return $this->render('exemplaire/index.html.twig', [
            'controller_name' => 'ExemplaireController',
        ]);
    }
}
