<?php

namespace ApiBundle\Controller;

use ApiBundle\Object\ApiLogin;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function getLoginAction()
    {
        $apiLogin=new ApiLogin();
        $apiLogin->setResponse(1);
        return $apiLogin;
    }
}
