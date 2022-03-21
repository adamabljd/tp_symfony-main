<?php

namespace App\Controller\Sandbox;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route ("/sandbox/twig", name = "sandbox_twig")
 */
class SandboxTwigController extends AbstractController
{
    /**
     * @Route("/vue1", name="_vue1")
     */
    public function vue1Action(): Response
    {
        return $this->render('Sandbox/SandboxTwig/vue2.html.twig');
    }

    // pas de directive Route
    public function menuAction(): Response
    {
        $args = array(
            'items' => array('connexion/d´econnexion', 'liste des vues', 'politique des cookies'),
    );
        return $this->render('Sandbox/Layouts/menu.html.twig', $args);
    }

    /**
    * @Route("/vue5", name="_vue5")
    */
    public function vue5Action(): Response
    {
        return $this->render('Sandbox/SandboxTwig/vue5.html.twig');
    }

    /**
    * @Route("/vue6", name="_vue6")
    */
    public function vue6Action(): Response
    {
        $args = array(
            'prenom' => 'Adam',
            'mail' => 'gilles@monmail',
        'offre' => $this->getTableau(),
    );

        return $this->render('Sandbox/SandboxTwig/vue6.html.twig', $args);
    }

    private function getTableau()
    {
        return array(
                'mentions' => array(
                    'Info' => array(
                        'nom' => 'Informatique',
                        'parcours' => array(
                            'Informatique',
                            'Image',
                        ),
                        'responsable' => 'SJ',
                    ),
                    'PC' => array(
                        'nom' => 'Physique-Chimie',
                        'parcours' => array(
                            'Physique',
                            'Chimie minérale',
                        ),
                        'responsable' => 'GA',
                    ),
                    'Bio' => array(
                        'nom' => 'Biologie',
                        'parcours' => array(
                            'Géologie',
                            'Biologie végétale',
                            'Biologie animale',
                        ),
                        'responsable' => 'MN',
                    ),
                ),
                'ues' => array(
                    array(
                        'nom' => 'Algo 1',
                        'volume' => 54,
                    ),
                    array(
                        'nom' => 'Maths discrètes',
                        'volume' => 40,
                    ),
                    array(
                        'nom' => 'Anglais S1',
                        'volume' => 20,
                    ),
                    array(
                        'nom' => 'Anglais S2',
                        'volume' => 20,
                    ),
                    array(
                        'nom' => 'Projet',
                        'volume' => 70,
                    ),
                ),
            );

    }
}
