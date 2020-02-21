<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MonPremierControlleurController extends AbstractController
{
    /**
     * @Route("/accueil", name="pageAccueil")
     */
    public function index()
    {
        return $this->render('mon_premier_controlleur/index.html.twig', [
            'controller_name' => 'MonPremierControlleurController',
        ]);
    }

    /**
     * @Route("/test", name="test")
     */
    public function test()
    {
        return $this->render('mon_premier_controlleur/test.html.twig');
    }
}
