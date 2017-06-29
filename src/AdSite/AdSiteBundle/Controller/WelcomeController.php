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
    public function welcomeAction()
    {

        return $this->render('AdSiteBundle:Default:welcomeTemp.html.twig');
       // return $this->render('AdSiteBundle:welcomeTemp.html.twig');
    }
}