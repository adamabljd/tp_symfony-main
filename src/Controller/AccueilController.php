<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    #[Route('/accueil', name: 'accueil')]
    public function index(): Response
    {
        return $this->render('Layouts/layout_vente.html.twig');
    }

    // pas de directive Route
    public function menuAction(): Response
    {
        $args = array(
            'items' => array('connexion/d´econnexion', 'liste des vues', 'politique des cookies'),
        );
        return $this->render('Layouts/menu.html.twig', $args);
    }
}
