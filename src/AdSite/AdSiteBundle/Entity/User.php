<?php

namespace AdSite\AdSiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="AdSite\AdSiteBundle\Repository\UserRepository")
 * @UniqueEntity(fields={"login"}, message="Le nom d'utilisateur existe déjà")
 */
class User
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
     * @ORM\Column(name="login", type="string", length=64)
     *
     * @Assert\NotBlank(message="Le login est obligatoire")
     *
     * @Assert\Length(
     *     min="5",
     *     max="15",
     *     minMessage="Le login nécessite au minimum 5 caractères",
     *     maxMessage="Le login nécessite au maximum 15 caractères"
     * )
     *
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=128)
     *
     * @Assert\NotBlank(message="Le mot de passe est obligatoire")
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=16)
     *
     * @Assert\NotBlank(message="Le téléphone est obligatoire")
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=128)
     *
     * @Assert\NotBlank(message="L'email est obligatoire")
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=64)
     *
     * @Assert\NotBlank(message="La ville est obligatoire")
     */
    private $city;


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
     * Set login
     *
     * @param string $login
     *
     * @return User
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return User
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return User
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }
}

