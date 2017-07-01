<?php

namespace AdSite\AdSiteBundle\Controller;

use AdSite\AdSiteBundle\Manager\ArticlesManager;
use AdSite\AdSiteBundle\Manager\UsersManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class MyAccountController extends Controller
{
    public function myaccountAction(Request $request)
    {
        $session = $request->getSession();
        $user_id = $session->get('user_login')[0]['id'];

        $article_access = new ArticlesManager($this->getDoctrine()->getManager());
        $articles = $article_access->getArticlesByUserId($user_id);

        return $this->render('AdSiteBundle:MyAccount:MyAccount.html.twig', array('article_tab' => $articles));
    }
}