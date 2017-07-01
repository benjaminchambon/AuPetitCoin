<?php

namespace AdSite\AdSiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Articles
 *
 * @ORM\Table(name="articles")
 * @ORM\Entity(repositoryClass="AdSite\AdSiteBundle\Repository\ArticlesRepository")
 */
class Articles
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
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=64)
     *
     * @Assert\NotBlank(message="Le titre est obligatoire")
     *
     * @Assert\Length(
     *     min="2",
     *     max="25",
     *     minMessage="Le titre nécessite au minimum 2 caractères",
     *     maxMessage="Le titre nécessite au maximum 25 caractères"
     * )
     *
     */
    private $title;

    /**
     * @ORM\ManyToOne(targetEntity="AdSite\AdSiteBundle\Entity\User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;


    /**
     * @var string
     *
     * @ORM\Column(name="category", type="string", length=32)
     *
     */
    private $category;

    /**
     * @var string
     *
     * @ORM\Column(name="place", type="string", length=64)
     *
     *  @Assert\NotBlank(message="Le lieu est obligatoire")
     *
     * @Assert\Length(
     *     min="2",
     *     max="25",
     *     minMessage="Le lieu nécessite au minimum 2 caractères",
     *     maxMessage="Le lieu nécessite au maximum 25 caractères"
     * )
     */
    private $place;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     *
     */
    private $date;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float")
     *
     * @Assert\NotBlank(message="Le prix est obligatoire")
     *
     * @Assert\Type(type="numeric", message="Le prix doit être un nombre")
     *
     * @Assert\GreaterThan(value = 0, message="Le prix doit être supérieur à 0")
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     *
     * @Assert\NotBlank(message="La descritpion est obligatoire")
     *
     */
    private $description;


    /**
     * @ORM\OneToMany(targetEntity="AdSite\AdSiteBundle\Entity\Pictures", mappedBy="article")
     */
    private $picture;



    public function setUser(User $user)
    {
        $this->user = $user;

        return $this;
    }

    public function getUser()
    {
        return $this->user;
    }


    public function setPicture(Pictures $picture)
    {
        $this->picture = $picture;

        return $this;
    }

    public function getPicture()
    {
        return $this->picture;
    }


    /**
     * Set title
     *
     * @param string $title
     *
     * @return Articles
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set category
     *
     * @param string $category
     *
     * @return Articles
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set place
     *
     * @param string $place
     *
     * @return Articles
     */
    public function setPlace($place)
    {
        $this->place = $place;

        return $this;
    }

    /**
     * Get place
     *
     * @return string
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Articles
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set price
     *
     * @param float $price
     *
     * @return Articles
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Articles
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
}

