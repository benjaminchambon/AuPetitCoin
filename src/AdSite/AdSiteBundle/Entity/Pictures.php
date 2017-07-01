<?php

namespace AdSite\AdSiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AdSite\AdSiteBundle\Entity\Articles;


/**
 * Pictures
 *
 * @ORM\Table(name="pictures")
 * @ORM\Entity(repositoryClass="AdSite\AdSiteBundle\Repository\PicturesRepository")
 */
class Pictures
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var float
     *
     * @ORM\Column(name="id_article", type="float")
     */
    private $idArticle;





    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255)
     */
    private $path;




    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * Set idArticle
     *
     * @param float $idArticle
     *
     * @return Pictures
     */
    public function setIdArticle($idArticle)
    {
        $this->idArticle = $idArticle;

        return $this;
    }

    /**
     * Get idArticle
     *
     * @return float
     */
    public function getIdArticle()
    {
        return $this->idArticle;
    }

    /**
     * Set path
     *
     * @param string $path
     *
     * @return Pictures
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }
}

