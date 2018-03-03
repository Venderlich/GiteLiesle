<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LiesleController extends Controller
{
    /**
     * @Route("/Liesle", name="Liesle")
     */
    public function index()
    {
        return $this->render('/Front/Liesle/liesle.html.twig', [
            'controller_name' => 'LiesleController',
        ]);
    }
}
