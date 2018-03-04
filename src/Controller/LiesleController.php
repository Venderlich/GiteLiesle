<?php

namespace App\Controller;

use App\Entity\TexteLiesle;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LiesleController extends Controller
{
    /**
     * @Route("/Liesle", name="Liesle")
     */
    public function index()
    {
//       $seed = $this->getDoctrine()->getManager();
//        $liesle = new TexteLiesle();
//
//        $liesle->setTitle("Mon Premier Tire");
//        $liesle->setTexte("Mon premier Texte");
//
//        $seed->persist($liesle);
//        $seed->flush();

        $liesle = $this->getDoctrine()->getRepository(TexteLiesle::class)->find(1);
        return $this->render('/Front/Liesle/liesle.html.twig', [
            'controller_name' => 'LiesleController', 'liesle'=>$liesle,
        ]);
    }
}
