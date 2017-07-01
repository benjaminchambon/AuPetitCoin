<?php

namespace AdSite\AdSiteBundle\Manager;

use AdSite\AdSiteBundle\Entity\Pictures;

class PicturesManager
{
    private $em;
    private $picturesRepo;

    public function __construct($em)
    {
        $this->em = $em;
        $this->picturesRepo = $this->em->getRepository('AdSiteBundle:Pictures');
    }

    public function insertPicture($data)
    {
        $picture = new Pictures();
        $picture->setIdArticle(15555);
        $picture->setPath($data->getClientOriginalName());
        $picture->setFile($data);
        $picture->upload();
        //$form->get('photos')->getData()->move($dir_path,$form->get('photos')->getData()->getClientOriginalName())
        $this->em->persist($picture);
        $this->em->flush();

        return $picture;
    }

    public function deletePicture($id)
    {
        $post = $this->picturesRepo->find($id);
        if (!$post) {
            return false;
        }
        $this->em->remove($post);
        $this->em->flush();
        return true;
    }

    public function updateArticle($id, $data)
    {
        $post = $this->picturesRepo->find($id);
        if (!$post) {
            return false;
        }
        if ($data->getPath() != null)
            $post->setPath($data->getPath());
        $this->em->flush();
        return true;
    }

    public function getPicturesByArticle($idArticle)
    {
        return $this->picturesRepo->getPicturesByArticle($idArticle);
    }

    public function getPicturesById($id){
        return $this->picturesRepo->getPicturesById($id);
    }


}