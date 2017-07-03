<?php

/**
 * Created by PhpStorm.
 * User: mateos
 * Date: 29/06/2017
 * Time: 12:02
 */

namespace AdSite\AdSiteBundle\Manager;

use AdSite\AdSiteBundle\Entity\Articles;

class ArticlesManager
{
    private $em;
    private $articleRepo;

    public function __construct($em)
    {
        $this->em = $em;
        $this->articleRepo = $this->em->getRepository('AdSiteBundle:Articles');
    }

    public function insertArticle($form, $user, $arraypicture)
    {
        $article = new Articles();
        $article->setTitle($form->get('title')->getData());
        $article->setCategory($form->get('category')->getData());
        $article->setPlace($form->get('place')->getData());
        $article->setDate(new \DateTime('today'));
        $article->setPrice($form->get('price')->getData());
        $article->setDescription($form->get('description')->getData());
        $article->setUser($user);
        $article->setPicture($arraypicture);
        $this->em->persist($article);
        $this->em->flush();

        return $article;
    }

    public function deleteArticle($id)
    {
        $post = $this->articleRepo->find($id);
        if (!$post) {
            return false;
        }
        $this->em->remove($post);
        $this->em->flush();
        return true;
    }

    public function updateArticle($id, $form)
    {
        $post = $this->articleRepo->find($id);
        if (!$post) {
            return false;
        }
        if ($form->get('title')->getData() != null)
            $post->setTitle($form->get('title')->getData());
        if ($form->get('category')->getData() != null)
            $post->setCategory($form->get('category')->getData());
        if ($form->get('place')->getData() != null)
            $post->setPlace($form->get('place')->getData());
        if ($form->get('price')->getData() != null)
            $post->setPrice($form->get('price')->getData());
        if ($form->get('description')->getData() != null)
            $post->setDescription($form->get('description')->getData());

        $this->em->flush();
        return $post;
    }

    public function getAllArticles()
    {
        return $this->articleRepo->findAll();
    }

    public function getArticlesByCategory($category)
    {
        return $this->articleRepo->getArticlesByCategory($category);
    }


    public function getArticlesByUserId($idUser)
    {
        $userArticles = [];
        $articlesAll = $this->articleRepo->findAll();
        foreach ($articlesAll as $article) {
            if ($article->getUser() != null && $article->getUser()->getId() == $idUser)
                array_push($userArticles, $article);
        }
        return $userArticles;
        //return $this->articleRepo->getArticleById($id);
    }


    public function getArticleById($id)
    {
        return $this->articleRepo->getArticleById($id);
    }

    public function getArticlesFiltered($keywords, $category, $city, $distance)
    {
        return $this->articleRepo->getArticlesFiltered($keywords, $category, $city, $distance);
    }
}