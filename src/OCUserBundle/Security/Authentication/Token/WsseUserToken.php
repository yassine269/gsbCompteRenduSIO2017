<?php

Namespace OCUserBundle\Security\Authentication\Token;

use Symfony\Component\Security\Core\Authentication\Token\AbstractToken;

/**
 * Created by PhpStorm.
 * User: TI-tygangsta
 * Date: 27/03/2017
 * Time: 19:58
 */
class WsseUserToken extends AbstractToken
{
    public $created;
    public $digest;
    public $nonce;

    public function __construct(array $roles = array())
    {
        parent::__construct($roles);

        // If the user has roles, consider it authenticated
        $this->setAuthenticated(count($roles) > 0);
    }

    public function getCredentials()
    {
        return '';
    }
}