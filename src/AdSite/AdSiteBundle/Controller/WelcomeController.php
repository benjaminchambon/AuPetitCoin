<?php
/**
 * Created by PhpStorm.
 * User: mateos
 * Date: 29/06/2017
 * Time: 15:10
 */

namespace AdSite\AdSiteBundle\Controller;

use AdSite\AdSiteBundle\Manager\ArticlesManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AdSite\AdSiteBundle\Form\ResearchFormType;



class WelcomeController extends Controller
{
    public function welcomeAction(Request $request)
    {
        /* test session */
        $session = $request->getSession();
        $user = $session->get('user_login')[0]['id'];
        if ($user == null) {
            $user = "anonyme";
        }

        $form = $this->createForm(ResearchFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $article_access = new ArticlesManager($this->getDoctrine()->getManager());
            if ($form->get('Rechercher')->isClicked()) {
                $article_tab = $article_access->getArticlesFiltered($form->get('keywords')->getData(),$form->get('category')->getData(),$form->get('city')->getData(),$form->get('distance')->getData());
            }
        }
        else {
            $articlesAccess = new ArticlesManager($this->getDoctrine()->getManager());
            $article_tab = $articlesAccess->getAllArticles();
        }
        //print_r($article_tab);
        return $this->render('AdSiteBundle:Default:welcomeTemp.html.twig',array('form' => $form->createView() ,'article_tab' => $article_tab,'user'=>$user));
       // return $this->render('AdSiteBundle:welcomeTemp.html.twig');

    }
}