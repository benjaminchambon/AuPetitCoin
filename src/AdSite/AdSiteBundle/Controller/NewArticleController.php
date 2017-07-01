<?php

namespace AdSite\AdSiteBundle\Controller;

use AdSite\AdSiteBundle\Entity\Articles;
use AdSite\AdSiteBundle\Entity\Pictures;
use AdSite\AdSiteBundle\Form\AddArticleFormType;
use AdSite\AdSiteBundle\Manager\ArticlesManager;
use AdSite\AdSiteBundle\Manager\PicturesManager;
use AdSite\AdSiteBundle\Manager\UsersManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class NewArticleController extends Controller
{
    public function AddArticleAction(Request $request)
    {
        $article = new Articles();
        $session = $request->getSession();
        $user_id = $session->get('user_login')[0]['id'];

        $user_access = new UsersManager($this->getDoctrine()->getManager());
        $user = $user_access->getUser($user_id);

        $form = $this->createForm(AddArticleFormType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($form->get('Enregistrer')->isClicked()) {
                $article_access = new ArticlesManager($this->getDoctrine()->getManager());
                $picture_access = new PicturesManager($this->getDoctrine()->getManager());


                if ($form->get('photos')->getData() != null) {
                    print_r($form->get('photos')->getData());

                    //upload sur le serveur et insertion dans la base
                    $pic = $picture_access->insertPicture( $form->get('photos')->getData());


                    $array_pic[] = $pic;
                    $art = $article_access->insertArticle($form, $user[0], $array_pic);

                    $pic->setArticle($art);
                }

                unset($article);
                $article = new Articles();
                $form = $this->createForm(AddArticleFormType::class, $article);
            }
        }

        return $this->render('AdSiteBundle:MyAccount:AddArticle.html.twig', array('form' => $form->createView()));


    }
}
