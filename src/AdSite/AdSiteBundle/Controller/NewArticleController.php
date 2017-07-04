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
        $session = $request->getSession();

        if($session->has('user_login') == false)
        {
            return $this->redirectToRoute('test_login');
        }

        $article = new Articles();
        $user_id = $session->get('user_login')[0]['id'];

        $user_access = new UsersManager($this->getDoctrine()->getManager());
        $user = $user_access->getUser($user_id);

        $form = $this->createForm(AddArticleFormType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($form->get('Enregistrer')->isClicked()) {
                $article_access = new ArticlesManager($this->getDoctrine()->getManager());
                $picture_access = new PicturesManager($this->getDoctrine()->getManager());
                $array_pic = array();

                //ajout des images dans la base
                if ($form->get('photos_1')->getData() != null) {

                    //upload sur le serveur et insertion dans la base
                    $pic = $picture_access->insertPicture( $form->get('photos_1')->getData());
                    array_push($array_pic,$pic);
                    $arr_test[] = $pic;
                }

                if ($form->get('photos_2')->getData() != null) {

                    //upload sur le serveur et insertion dans la base
                    $pic = $picture_access->insertPicture( $form->get('photos_2')->getData());
                    array_push($array_pic,$pic);
                }
                if ($form->get('photos_3')->getData() != null) {

                    //upload sur le serveur et insertion dans la base
                    $pic = $picture_access->insertPicture( $form->get('photos_3')->getData());
                    array_push($array_pic,$pic);

                }
                //ajout de l'article
                $art = $article_access->insertArticle($form, $user[0], $arr_test);
                //mise a jour foreign key image
                foreach ($array_pic as $elt) {
                    $picture_access->updatePicture($elt->getId(), null, $art);
                }

                unset($article);
                $article = new Articles();
                $form = $this->createForm(AddArticleFormType::class, $article);
            }
        }

        return $this->render('AdSiteBundle:MyAccount:AddArticle.html.twig', array('form' => $form->createView()));


    }
}
