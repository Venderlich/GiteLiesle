<?php

namespace App\Controller;

use App\Entity\TexteAcceuil;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AccController extends Controller
{
    /**
     * @Route("/Acc", name="Acc")
     */
    public function index()
    {
//        $seed = $this->getDoctrine()->getManager();
//        $acc = new TexteAcceuil();
//
//        $acc->setTitle("Mon Premier Tire");
//        $acc->setTexte("Mon premier Texte");
//
//        $seed->persist($acc);
//        $seed->flush();

        $acc = $this->getDoctrine()->getRepository(TexteAcceuil::class)->find(1);
        return $this->render('Front/Acceuil/index.html.twig',['acc' => $acc]);
    }
}
