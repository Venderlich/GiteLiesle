<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GiteController extends Controller
{
    /**
     * @Route("/Gite", name="Gite")
     */
    public function index()
    {
        return $this->render('Front/Gite/gite.html.twig', [
            'controller_name' => 'GiteController',
        ]);
    }
}
