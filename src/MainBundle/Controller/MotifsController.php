<?php

namespace OCUserBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\JsonResponse;

class MotifsController extends FOSRestController

{
    public function getMotifsAction()
    {
        $data = $this->getDoctrine()->getManager()->getRepository('OCUserBundle:User')->findAll(); // get data, in this case list of users.
        return  $data;
    }
}
