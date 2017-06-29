<?php

namespace AdSite\AdSiteBundle\Controller;

use AdSite\AdSiteBundle\Entity\Connexion;
use AdSite\AdSiteBundle\Entity\Produits;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AdSite\AdSiteBundle\Form\LoginFormType;
use Symfony\Component\HttpFoundation\Request;


class ConnexionController extends Controller
{
    public function connexionFormulaireAction(Request $request)
    {
        $connexion = new Connexion();
        $form = $this->createForm(LoginFormType::class, $connexion);
        $form->handleRequest($request);

        $pseudo = '';

        if ($form->isValid()) {
            $pseudo = $form->get('pseudo')->getData();
            $this->insertDataBase($pseudo);
            $produits = $this->getData();
        }

        return $this->render('AdSiteBundle:Default:index.html.twig', array('form' => $form->createView(), 'pseudo' => $pseudo, 'produits' => $produits));
    }

    public function insertDataBase($data)
    {
        $em = $this->getDoctrine()->getManager();
        //insertion dans la base
        $produits = new Produits();
      //  $produits->setCategorie($data);
        $produits->setDescription('Tomate');
       // $produits->setDisponible('1');
       // $produits->setImage('https://www.google.fr/search?q=norv%C3%A8ge&rlz=1C1CHBF_frFR718FR718&source=lnms&tbm=isch&sa=X&ved=0ahUKEwj8_em4iMfUAhXpJ8AKHWcpD10Q_AUICygC&biw=1366&bih=662#imgrc=vfJSMm3s6dpq9M:');
        $produits->setNom($data);
        $produits->setPrix('0.99');
        //$produits->setTva('19.6');

        $em->persist($produits);
        $em->flush();

        //RECUPERER DES DONNES DANS LA
        // $produits = $em->getRepository('EcommerceBundle:Produits')->findAll();
    }

    public function getData(){
        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository('AdSiteBundle:Produits')->findAll();
        return $produits;
    }
}
