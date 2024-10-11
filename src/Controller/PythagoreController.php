<?php

namespace App\Controller;

use App\Service\PythagoreUtility;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class PythagoreController extends AbstractController
{

    #[Route('/pythagore/view', name: 'app_display_pythagore')]
    public function displayPythagoreAction(PythagoreUtility $pythagoreUtility): Response
    {
         // Récupérer le tableau de Pythagore via le service PythagoreUtility
         $pythagoreTable = $pythagoreUtility->display();

         // Rendu de la vue Twig displayPythagore.html.twig
         return $this->render('displayPythagore.html.twig', [
             'htmlResponse' => $pythagoreTable,
             'title' => 'Symfony & table de pythagore',
             'name' => 'ALLEY Faïssale'
         ]);
    }
}
