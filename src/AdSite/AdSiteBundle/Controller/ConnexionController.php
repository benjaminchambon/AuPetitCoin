<?php

namespace AdSite\AdSiteBundle\Controller;

use AdSite\AdSiteBundle\Entity\Connexion;
use AdSite\AdSiteBundle\Entity\Produits;
use AdSite\AdSiteBundle\Repository\ArticlesRepository;
use AdSite\AdSiteBundle\Manager\ArticlesManager;
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
        $produits = [];
        if ($form->isValid()) {
            $article_access = new ArticlesManager($this->getDoctrine()->getManager());
            $pseudo = $form->get('pseudo')->getData();
            $article_access->insertDataBase($pseudo);
            $produits = $article_access->getData();
        }

        return $this->render('AdSiteBundle:Default:index.html.twig', array('form' => $form->createView(), 'pseudo' => $pseudo, 'produits' => $produits));
    }

}
