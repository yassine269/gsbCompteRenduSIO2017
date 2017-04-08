<?php

namespace OCUserBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\JsonResponse;

class UserController extends FOSRestController

{
    public function getUsersAction()
    {
        $data = $this->getDoctrine()->getManager()->getRepository('OCUserBundle:User')->findAll(); // get data, in this case list of users.
        return  $data;
    }
    public function indexAction()
    {
        $data = $this->getDoctrine()->getManager()->getRepository('OCUserBundle:User')->findAll(); // get data, in this case list of users.
        return  $data;
    }
}
