<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ChambreController extends Controller
{
    /**
     * @Route("/Chambre", name="Chambre")
     */
    public function index()
    {
        return $this->render('Front/Chambre/chambre.html.twig', [
            'controller_name' => 'ChambreController',
        ]);
    }
}
