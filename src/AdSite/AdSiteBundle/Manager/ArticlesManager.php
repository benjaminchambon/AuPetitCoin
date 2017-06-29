<?php

/**
 * Created by PhpStorm.
 * User: mateos
 * Date: 29/06/2017
 * Time: 12:02
 */
namespace AdSite\AdSiteBundle\Manager;
use AdSite\AdSiteBundle\Entity\Articles;
use Symfony\Component\Validator\Constraints\DateTime;

class ArticlesManager
{
    private $em;
    public function __construct($em)
    {
        $this->em = $em;
    }

    public function insertDataBase($data)
    {

        //insertion dans la base
        $article = new Articles();
        $article->setTitle('Tomate');
        $article->setDescription('blabla');
        $article->setCategory('voiture');
        $article->setPlace("Sivry");
        $date = new \DateTime('today');
        $article->setDate($date);
        $article->setPrice('1');

        $this->em->persist($article);
        $this->em->flush();

        //RECUPERER DES DONNES DANS LA
        // $produits = $em->getRepository('EcommerceBundle:Produits')->findAll();
    }

    public function getData(){
        $produits = $this->em->getRepository('AdSiteBundle:Articles')->findAll();
        return $produits;
    }
}