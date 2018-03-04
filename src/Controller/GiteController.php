<?php

namespace App\Controller;

use App\Entity\TexteGite;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GiteController extends Controller
{
    /**
     * @Route("/Gite", name="Gite")
     */
    public function index()
    {


//        $seed = $this->getDoctrine()->getManager();
//        $gite = new TexteGite();
//
//        $gite->setTitle("Mon Premier Tire");
//        $gite->setTexte("Mon premier Texte");
//
//        $seed->persist($gite);
//        $seed->flush();

        $gite = $this->getDoctrine()->getRepository(TexteGite::class)->find(1);
        return $this->render('Front/Gite/gite.html.twig', [
            'controller_name' => 'GiteController', 'gite'=>$gite,
        ]);
    }
}
