<?php

namespace AdSite\AdSiteBundle\Controller;

use AdSite\AdSiteBundle\Entity\Articles;
use AdSite\AdSiteBundle\Manager\ArticlesManager;
use AdSite\AdSiteBundle\Manager\PicturesManager;
use AdSite\AdSiteBundle\Manager\UsersManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AdSite\AdSiteBundle\Form\ModificationFormType;



class MyAccountController extends Controller
{
    public function myaccountAction(Request $request)
    {
        if ($request->get('id') != null)
            $this->delete($request->get('id'));

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

/*
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, 'https://maps.googleapis.com/maps/api/distancematrix/json?units=imperial&origins=Paris&destinations=espinouze&key=AIzaSyBbhRzlEDXRc4yTsfKyod_USIbggYUN918');
        $result = curl_exec($ch);
        curl_close($ch);
        $obj = json_decode($result);
        print_r($obj->{'rows'}[0]->{'elements'}[0]->{'distance'}->{'text'});*/

        return $this->render('AdSiteBundle:MyAccount:MyAccount.html.twig', array('article_tab' => $articles,
            'form_inscr' => $form_inscription->createView()));
    }

    public function delete($idArticle)
    {
        $article_access = new ArticlesManager($this->getDoctrine()->getManager());
        $picture_access = new PicturesManager($this->getDoctrine()->getManager());


        $pictures = $picture_access->getAllPictures();
        foreach ($pictures as $pic) {
            if ($pic->getArticle() != null &&  $pic->getArticle()->getId() == $idArticle)
                $picture_access->deletePicture($pic->getId());
        }
        $article_access->deleteArticle($idArticle);
        return $this->redirectToRoute('my_account');
    }

}