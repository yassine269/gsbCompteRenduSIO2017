<?php

namespace OCUserBundle\Repository;

use Doctrine\ORM\EntityRepository;
use OCUserBundle\Admin\UserAdmin;
use OCUserBundle\Entity\User;

/**
 * Created by PhpStorm.
 * User: TI-tygangsta
 * Date: 20/02/2017
 * Time: 13:59
 */
class UserRepository extends EntityRepository
{
    public function findByUserForSalt($username){
        $user =$this->findBy(array('username'=>$username));
        return $user;
    }


}