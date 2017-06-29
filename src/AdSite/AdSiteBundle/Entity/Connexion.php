<?php

namespace AdSite\AdSiteBundle\Entity;

class Connexion{
    protected $pseudo;
    protected $password;

    public function getPseudo(){
        return $this->pseudo;
    }

    public function getPassword(){
        return $this->password;
    }

    public function setPseudo($pseudo){
        $this->pseudo = $pseudo;
    }

    public function setPassword($password){
        $this->password = $password;
    }

}