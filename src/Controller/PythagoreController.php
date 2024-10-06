<?php

namespace App\Controller;

use App\Service\PythagoreUtility;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PythagoreController extends AbstractController
{

    private $pythagoreUtility;

    public function __construct(PythagoreUtility $pythagoreUtility)
    {
        $this->pythagoreUtility = $pythagoreUtility;
    }

    #[Route('/pythagore', name: 'app_pythagore')]
    public function index(): Response
    {
        return $this->redirectToRoute("app_display_pythagore");
        
    }

    #[Route('/pythagore/view', name: 'app_display_pythagore')]
    public function displayPythagoreAction(): Response
    {
         // Récupérer le tableau de Pythagore via le service PythagoreUtility
         $pythagoreTable = $this->pythagoreUtility->display();

         // Rendu de la vue Twig displayPythagore.html.twig
         return $this->render('displayPythagore.html.twig', [
             'htmlResponse' => $pythagoreTable,
             'title' => 'Symfony & table de pythagore',
             'name' => 'ALLEY Faïssale'
         ]);
    }
}
