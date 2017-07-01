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

    public function updateArticle($id, $data)
    {
        $post = $this->articleRepo->find($id);
        if (!$post) {
            return false;
        }
        if ($data->getTitle() != null)
            $post->setTitle($data->getTitle());
        if ($data->getCategory() != null)
            $post->setCategory($data->getCategory());
        if ($data->getPlace() != null)
            $post->setPlace($data->getPlace());
        if ($data->getDate() != null)
            $post->setDate($data->getDate());
        if ($data->getPrice() != null)
            $post->setPrice($data->getPrice());
        if ($data->getDescription() != null)
            $post->setDescription($data->getDescription());

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

    public function getArticlesByUserId($userId)
    {
        return $this->articleRepo->getArticlesByUserId($userId);
    }
}