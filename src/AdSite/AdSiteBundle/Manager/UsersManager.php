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

    public function insertUser($form)
    {
        $user = new User();
        $user->setLogin($form->get('login')->getData());
        $user->setPassword($form->get('password')->getData());
        $user->setPhone($form->get('phone')->getData());
        $user->setEmail($form->get('email')->getData());
        $user->setCity($form->get('city')->getData());

        $this->em->persist($user);
        $this->em->flush();

        return $user;
    }

    public function getUserId($login, $password)
    {
        return $this->userRepo->getUserId($login, $password);
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

    public function updateUser($id, $form)
    {
        $post = $this->userRepo->find($id);
        if (!$post) {
            return false;
        }
        if ($form->get('login')->getData() != null)
            $post->setLogin($form->get('login')->getData());
        if ($form->get('password')->getData() != null)
            $post->setPassword($form->get('password')->getData());
        if ($form->get('phone')->getData() != null)
            $post->setPhone($form->get('phone')->getData());
        if ($form->get('email')->getData()!= null)
            $post->setEmail($form->get('email')->getData());
        if ($form->get('city')->getData() != null)
            $post->setCity($form->get('city')->getData());

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

    public function getUser($id){
        return $this->userRepo->getUser($id);
    }

}