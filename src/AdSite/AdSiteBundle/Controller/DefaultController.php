<?php

namespace AdSite\AdSiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        $tontons = array('tonton1','tonton2','tonton3');
        return $this->render('AdSiteBundle:Default:index.html.twig',array('name' => $name,'tontons' => $tontons));
    }
}
