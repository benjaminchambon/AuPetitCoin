<?php

namespace AdSite\AdSiteBundle\Controller;

use AdSite\AdSiteBundle\Entity\Articles;
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
            //$pseudo = $form->get('pseudo')->getData();

            $articleTest = new Articles();
            $articleTest->setTitle('ben');
            $articleTest->setCategory('ben');
            $articleTest->setPlace('ben');
            $articleTest->setPrice(2.0);
            $articleTest->setDescription('ben');

            $article_access->updateArticle(1, $articleTest);
            //$this->article_access->insertArticle($pseudo);
            //$articles = $article_access->getAllArticles();
            //$articles = $article_access->getArticlesByCategory('voiture');
            // $this->article_access->deleteArticle(8);
        }

        return $this->render('AdSiteBundle:Default:index.html.twig', array('form' => $form->createView(), 'pseudo' => $pseudo, 'articles' => $articles));
    }

}
