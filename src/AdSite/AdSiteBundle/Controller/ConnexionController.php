<?php

namespace AdSite\AdSiteBundle\Controller;

use AdSite\AdSiteBundle\Entity\Connexion;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AdSite\AdSiteBundle\Form\LoginFormType;
use Symfony\Component\HttpFoundation\Request;

class ConnexionController extends Controller
{
    public function connexionFormulaireAction(Request $request)
    {
        $connexion = new Connexion();
        $form = $this->createForm(LoginFormType::class, $connexion);
        $form->handleRequest($request);

        $pseudo = '';

        if ($form->isValid()) {
            $pseudo = $form->get('pseudo')->getData();
        }

        return $this->render('AdSiteBundle:Default:index.html.twig', array('form' => $form->createView(), 'pseudo' => $pseudo));
    }
}
