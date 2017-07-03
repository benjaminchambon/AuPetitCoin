<?php
/**
 * Created by PhpStorm.
 * User: mateos
 * Date: 02/07/2017
 * Time: 23:56
 */

namespace AdSite\AdSiteBundle\Controller;


use AdSite\AdSiteBundle\Form\EditInfoArticleFormType;
use AdSite\AdSiteBundle\Form\EditPicArticleFormType;
use Symfony\Component\HttpFoundation\Request;
use AdSite\AdSiteBundle\Entity\Articles;
use AdSite\AdSiteBundle\Entity\Pictures;
use AdSite\AdSiteBundle\Form\AddArticleFormType;
use AdSite\AdSiteBundle\Manager\ArticlesManager;
use AdSite\AdSiteBundle\Manager\PicturesManager;
use AdSite\AdSiteBundle\Manager\UsersManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EditArticleController extends Controller
{

    public function editArticleAction(Request $request, $idArticle)
    {
        //récupération des information lié a l'article
        $articleAccess = new ArticlesManager($this->getDoctrine()->getManager());
        $article = $articleAccess->getArticleById($idArticle)[0];

        //récupération de l'id de l'utilisateur
        $session = $request->getSession();
        $user_id = $session->get('user_login')[0]['id'];

        //formulaire
        $form = $this->createForm(EditInfoArticleFormType::class, $article);
        $formPic = $this->createForm(EditPicArticleFormType::class,$article);
        $form->handleRequest($request);
        $formPic->handleRequest($request);
        echo count($article->getPicture());
        $articlePics = $article->getPicture();



        if ($form->isSubmitted() && $form->isValid()) {

            if ($form->get('Enregistrer')->isClicked()) {
                $article_access = new ArticlesManager($this->getDoctrine()->getManager());
                //ajout de l'article
                echo 'valid';
                echo $form->get('description')->getData();
                $article_access->updateArticle($idArticle,$form);
            }
        }

        if ($formPic->isSubmitted() && $formPic->isValid()) {
            if ($formPic->get('Enregistrer')->isClicked()) {
               echo "ajout_image";
                $picture_access = new PicturesManager($this->getDoctrine()->getManager());
                $pic = $picture_access->insertPicture( $formPic->get('photo')->getData());
                $picture_access->updatePicture($pic->getId(), null, $article);
            }
        }


        return $this->render('AdSiteBundle:MyAccount:EditArticle.html.twig',array('form' => $form->createView(),'articlePics'=>$articlePics,'formPic' => $formPic->createView()));
    }
}