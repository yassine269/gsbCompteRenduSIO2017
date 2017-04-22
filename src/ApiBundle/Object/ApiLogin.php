<?php

namespace ApiBundle\Object;
/**
 * Created by PhpStorm.
 * User: TI-tygangsta
 * Date: 22/04/2017
 * Time: 16:55
 */
class ApiLogin
{
    private  $response;

    /**
     * @return mixed
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @param mixed $response
     */
    public function setResponse($response)
    {
        $this->response = $response;
    }

    public function ApiLogin($response){
        $this->response=$response;
    }

}