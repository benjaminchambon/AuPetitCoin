<?php

namespace AdSite\AdSiteBundle\Controller;


use AdSite\AdSiteBundle\Entity\Connexion;
use AdSite\AdSiteBundle\Manager\UsersManager;
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

        if ($form->isValid()) {
            $user_access = new UsersManager($this->getDoctrine()->getManager());
            $login = $form->get('pseudo')->getData();
            $password = $form->get('password')->getData();
            if ($user_access->checkUserExist($login, $password) > 0){
                //return $this->render('AdSiteBundle:Default:welcomeTemp.html.twig');
                return $this->redirectToRoute('test_homepage');
            }
        }

        return $this->render('AdSiteBundle:Default:index.html.twig', array('form' => $form->createView()));


    }
}
