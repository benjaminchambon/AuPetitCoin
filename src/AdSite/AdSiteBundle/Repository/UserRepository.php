<?php

namespace AdSite\AdSiteBundle\Repository;

/**
 * UserRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UserRepository extends \Doctrine\ORM\EntityRepository
{
    public function checkUserExist($login, $password){
        $user = $this->getEntityManager()->createQuery('
        SELECT a FROM AdSiteBundle:User a
        WHERE a.login = :login
        AND a.password = :password
        ')->setParameters(array('login' => $login, 'password' => $password))->getResult();

        return count($user) > 0;
    }
}
