<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ResponsableController extends Controller
{
    public function indexAction(){
        $currentUser=$this->getUser();
        return $this->render('MainBundle:Responsable:index.html.twig',array(
            'currentUser' => $currentUser
        ));
    }
}
