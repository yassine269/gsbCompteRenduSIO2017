<?php

namespace OCUserBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use OCUserBundle\Entity\PublicUser;
use Symfony\Component\HttpFoundation\JsonResponse;

class PublicUserController extends FOSRestController

{
    public function getPublicUsersAction($username)
    {
        $data = $this->getDoctrine()->getManager()->getRepository('OCUserBundle:User')->findByUserForSalt($username);
        $pulicUser = new PublicUser();
        $pulicUser->setId($data[0]->getId());
        $pulicUser->setSalt($data[0]->getSalt());
        $pulicUser->setUsername($data[0]->getUsername());
        $pulicUser->setFonction($data[0]->getFonctLibelle);
        return  $pulicUser;
    }
}
