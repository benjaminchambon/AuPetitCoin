<?php

namespace AdSite\AdSiteBundle\Controller;

use AdSite\AdSiteBundle\Entity\Connexion;
use AdSite\AdSiteBundle\Manager\ArticlesManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AdSite\AdSiteBundle\Form\LoginFormType;
use Symfony\Component\HttpFoundation\Request;


class LoginController extends Controller
{
    public function loginAction(Request $request)
    {
        $connexion = new Connexion();
        $form = $this->createForm(LoginFormType::class, $connexion);
        $form->handleRequest($request);

        $pseudo = '';
        $articles = [];

        if ($form->isValid()) {
            $article_access = new ArticlesManager($this->getDoctrine()->getManager());
            $pseudo = $form->get('pseudo')->getData();
            $article_access->insertDataBase($pseudo);
            $articles = $article_access->getData();
        }

        return $this->render('AdSiteBundle:Default:index.html.twig', array('form' => $form->createView(), 'pseudo' => $pseudo, 'articles' => $articles));
    }

}
