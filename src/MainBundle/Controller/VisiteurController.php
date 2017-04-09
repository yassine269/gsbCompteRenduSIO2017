<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class VisiteurController extends Controller
{
    public function indexAction(){

        $currentUser=$this->getUser();


        return $this->render('MainBundle:Visiteur:index.html.twig',array(
            'currentUser' => $currentUser
        ));
    }
}