<?php

namespace OCUserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $curentUser=$this->getUser();

        $repository = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('OCUserBundle:User');
        ;

        $listUsers=$repository->findAll();

        return $this->render('OCUserBundle:Default:index.html.twig',array(
            'currentUser'=>$curentUser,
            'listUsers'=>$listUsers
        ));
    }
}
