<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LivreOrController extends Controller
{
    /**
     * @Route("/Rewiew", name="Rewiew")
     */
    public function index()
    {
        return $this->render('Front/Livre_or/livre_or.html.twig', [
            'controller_name' => 'LivreOrController',
        ]);
    }
}
