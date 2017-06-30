<?php
/**
 * Created by PhpStorm.
 * User: mateos
 * Date: 29/06/2017
 * Time: 15:10
 */

namespace AdSite\AdSiteBundle\Controller;

use AdSite\AdSiteBundle\Entity\Connexion;
use AdSite\AdSiteBundle\Manager\ArticlesManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AdSite\AdSiteBundle\Form\LoginFormType;
use Symfony\Component\HttpFoundation\Request;


class WelcomeController extends Controller
{
    public function welcomeAction(Request $request)
    {
        /* test session */
        $session = $request->getSession();
        $user = $session->get('user_login')[0]['id'];
        print_r($user);
        if ($user == null) {
            $user = "anonyme";
        }

        $articlesAccess = new ArticlesManager($this->getDoctrine()->getManager());
        $article_tab= $articlesAccess->getAllArticles();
        //print_r($article_tab);
        return $this->render('AdSiteBundle:Default:welcomeTemp.html.twig',array('article_tab' => $article_tab,'user'=>$user));
       // return $this->render('AdSiteBundle:welcomeTemp.html.twig');

    }
}