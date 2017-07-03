<?php

namespace AdSite\AdSiteBundle\Controller;

use AdSite\AdSiteBundle\Manager\ArticlesManager;
use AdSite\AdSiteBundle\Manager\UsersManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use function Symfony\Component\DependencyInjection\Tests\Fixtures\factoryFunction;
use Symfony\Component\HttpFoundation\Request;
use AdSite\AdSiteBundle\Entity\User;
use AdSite\AdSiteBundle\Form\ModificationFormType;


class MyAccountController extends Controller
{
    public function myaccountAction(Request $request)
    {
        $session = $request->getSession();
        $user_id = $session->get('user_login')[0]['id'];

        $article_access = new ArticlesManager($this->getDoctrine()->getManager());
        $articles = $article_access->getArticlesByUserId($user_id);

        $user_access = new UsersManager($this->getDoctrine()->getManager());
        $user = $user_access->getUser($user_id)[0];


        $form_inscription = $this->createForm(ModificationFormType::class, $user);
        $form_inscription->handleRequest($request);

        if ($form_inscription->isValid()) {
            if ($form_inscription->get('Modifier')->isClicked()) {
                $user_access = new UsersManager($this->getDoctrine()->getManager());
                $user_access->updateUser($user_id, $form_inscription);
                return $this->redirectToRoute('my_account');
            }
        }

        return $this->render('AdSiteBundle:MyAccount:MyAccount.html.twig', array('article_tab' => $articles, 'form_inscr' => $form_inscription->createView()));
    }
}