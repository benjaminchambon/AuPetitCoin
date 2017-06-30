<?php

namespace AdSite\AdSiteBundle\Controller;

use AdSite\AdSiteBundle\Entity\Articles;
use AdSite\AdSiteBundle\Form\AddArticleFormType;
use AdSite\AdSiteBundle\Manager\ArticlesManager;
use AdSite\AdSiteBundle\Manager\PicturesManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class MyAccountController extends Controller
{
    public function myaccountAction(Request $request)
    {
        $session = $request->getSession();
        $user = $session->get('user_login')[0]['id'];

        $articles = [];
        //$article_access = new ArticlesManager($this->getDoctrine()->getManager());
        //$articles = $article_access->getArticlesByUserId($user);

        return $this->render('AdSiteBundle:MyAccount:MyAccount.html.twig', array('articles' => $articles));
    }
}