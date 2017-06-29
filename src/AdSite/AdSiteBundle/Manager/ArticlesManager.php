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
        //  $produits->setCategorie($data);
        $article->setTitle('Tomate');
        $article->setDescription('blabla');
        $article->setCategory('voiture');
        $dt = new DateTime();
        $article->setPlace("Sivry");
        $date = new DateTime('2000-01-01');
        $article->setDate($date);
        $article->setPrice('1');
        // $produits->setDisponible('1');
        // $produits->setImage('https://www.google.fr/search?q=norv%C3%A8ge&rlz=1C1CHBF_frFR718FR718&source=lnms&tbm=isch&sa=X&ved=0ahUKEwj8_em4iMfUAhXpJ8AKHWcpD10Q_AUICygC&biw=1366&bih=662#imgrc=vfJSMm3s6dpq9M:');
        //$produits->setTva('19.6');

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