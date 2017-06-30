<?php

namespace AdSite\AdSiteBundle\Manager;

use AdSite\AdSiteBundle\Entity\User;

class UsersManager
{
    private $em;
    private $userRepo;

    public function __construct($em)
    {
        $this->em = $em;
        $this->userRepo = $this->em->getRepository('AdSiteBundle:User');
    }

    public function insertUser($data)
    {
        $user = new User();
        $user->setLogin($data->getLogin());
        $user->setPassword($data->getPassword());
        $user->setPhone($data->getPhone());
        $user->setEmail($data->getEmail());
        $user->setCity($data->getCity());

        $this->em->persist($user);
        $this->em->flush();
    }

    public function deleteUser($id)
    {
        $post = $this->userRepo->find($id);
        if (!$post) {
            return false;
        }
        $this->em->remove($post);
        $this->em->flush();
        return true;
    }

    public function updateUser($id, $data)
    {
        $post = $this->userRepo->find($id);
        if (!$post) {
            return false;
        }
        if ($data->getLogin() != null)
            $post->setLogin($data->getLogin());
        if ($data->getPassword() != null)
            $post->setPassword($data->getPassword());
        if ($data->getPhone() != null)
            $post->setPhone($data->getPhone());
        if ($data->getEmail() != null)
            $post->setEmail($data->getEmail());
        if ($data->getCity() != null)
            $post->setCity($data->getCity());

        $this->em->flush();
        return true;
    }

    public function getAllUsers()
    {
        return $this->userRepo->findAll();
    }

    public function checkUserExist($login, $password){
        return $this->userRepo->checkUserExist($login, $password);
    }

}