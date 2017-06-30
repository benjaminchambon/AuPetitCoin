<?php

namespace AdSite\AdSiteBundle\Controller;


use AdSite\AdSiteBundle\Entity\Articles;
use AdSite\AdSiteBundle\Form\AddArticleFormType;
use AdSite\AdSiteBundle\Manager\ArticlesManager;
use AdSite\AdSiteBundle\Manager\PicturesManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class NewArticleController extends Controller
{
    public function AddArticleAction(Request $request)
    {
        $article = new Articles();
        $form = $this->createForm(AddArticleFormType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($form->get('Enregistrer')->isClicked()) {
                $article_access = new ArticlesManager($this->getDoctrine()->getManager());
                $picture_access = new PicturesManager($this->getDoctrine()->getManager());

                $newArticle = $article_access->insertArticle($form);
                $picture_access->insertPicture($newArticle->getId(), $form->get('photos')->getData());
                unset($article);
                $article = new Articles();
                $form = $this->createForm(AddArticleFormType::class, $article);
            }
        }

        return $this->render('AdSiteBundle:MyAccount:AddArticle.html.twig', array('form' => $form->createView()));


    }
}
