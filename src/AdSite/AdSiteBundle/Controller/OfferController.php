<?php
/**
 * Created by PhpStorm.
 * User: mateos
 * Date: 01/07/2017
 * Time: 20:10
 */

namespace AdSite\AdSiteBundle\Controller;
use AdSite\AdSiteBundle\Entity\Connexion;
use AdSite\AdSiteBundle\Manager\ArticlesManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AdSite\AdSiteBundle\Form\LoginFormType;
use Symfony\Component\HttpFoundation\Request;

class OfferController extends Controller
{
    public function offerAction($idPic)
    {
        /* test session */
       /* $session = $request->getSession();
        $user = $session->get('user_login')[0]['id'];
        if ($user == null) {
            $user = "anonyme";
        }
        $articlesAccess = new ArticlesManager($this->getDoctrine()->getManager());
        $article_tab= $articlesAccess->getAllArticles();*/
        //print_r($article_tab);

        $articleAccess = new ArticlesManager($this->getDoctrine()->getManager());
        $article = $articleAccess->getArticleById($idPic)[0];
        return $this->render('AdSiteBundle:Default:OfferTemp.html.twig',array('idPic'=> $idPic,'article'=>$article));
        // return $this->render('AdSiteBundle:welcomeTemp.html.twig');

    }
}