<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * class AccueilController
 * @package App\Controller
 * @Route("/", name="garage_")
 */


class AccueilController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function accueil(): Response
    {
        return $this->render('accueil/index.html.twig', [
            'msg_accueil' => 'Accueil du Garage',
        ]);
    }
}
