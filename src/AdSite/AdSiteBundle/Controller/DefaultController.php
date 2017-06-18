<?php

namespace AdSite\AdSiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AdSiteBundle:Default:index.html.twig');
    }
}
