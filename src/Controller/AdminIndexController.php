<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminIndexController extends Controller
{
    /**
     * @Route("/Admin/Index", name="Admin_Index")
     */
    public function index()
    {
        return $this->render('Back/Index/index.html.twig', [
            'controller_name' => 'AdminIndexController',
        ]);
    }
}
