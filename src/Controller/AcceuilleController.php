<?php
/**
 * Created by PhpStorm.
 * User: Tristan
 * Date: 03/03/2018
 * Time: 13:47
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AcceuilleController extends Controller
{
    public function getWiewAcceuilAction(){
        return $this->render('Front/Acceuil/index.html.twig');
    }

}