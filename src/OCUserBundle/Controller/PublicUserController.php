<?php

namespace OCUserBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\JsonResponse;

class PublicUserController extends FOSRestController

{
    public function getPublicUsersAction($username)
    {
        $data = $this->getDoctrine()->getManager()->getRepository('OCUserBundle:User')->findByUserForSalt($username);
        $salt=$data[0]->getSalt();
        return  $salt;
    }
}
