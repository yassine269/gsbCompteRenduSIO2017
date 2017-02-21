<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DelegueController extends Controller
{
    public function indexAction(){
        $currentUser=$this->getUser();
        return $this->render('MainBundle:Delegue:index.html.twig',array(
            'currentUser' => $currentUser
        ));
    }
}
