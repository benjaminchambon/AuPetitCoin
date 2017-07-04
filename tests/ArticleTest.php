<?php
/**
 * Created by PhpStorm.
 * User: benjamin chambon
 * Date: 04/07/2017
 * Time: 16:57
 */

use AdSite\AdSiteBundle\Entity\Articles;
use Symfony\Component\Validator\Validation;

require_once dirname(__DIR__) . '/app/AppKernel.php';

class ArticleTest extends PHPUnit_Framework_TestCase
{
    protected $kernel;
    protected $entityManager;
    protected $container;
    protected $articleRepo;


    public function setUp()
    {
        $this->kernel = new \AppKernel('test', true);
        $this->kernel->boot();
        $this->container = $this->kernel->getContainer();
        $this->entityManager = $this->container->get('doctrine')->getManager();
        $this->articleRepo = $this->entityManager->getRepository('AdSiteBundle:Articles');
        parent::setUp();
    }

    //Récupération article par catégorie existante
    public function testgetArticleByCategory()
    {
        $articles = $this->articleRepo->getArticlesByCategory('Automobile');
        $arrayCat = [];
        foreach ($articles as $article) {
          if ($article->getCategory() == 'Automobile')
              array_push($arrayCat, $article);
        }
        $this->assertEquals($articles, $arrayCat);
    }

    //Récupération article par catégorie inéxistante
    public function testgetArticleByCategoryNotExisting()
    {
        $articles = $this->articleRepo->getArticlesByCategory('Table');
        $this->assertEquals(0, sizeof($articles));
    }

    //Récupération article par Id existant -> a changer avant la soutenance
    public function testgetArticleById(){
        $article = $this->articleRepo->getArticleById(83);
        $this->assertEquals(1, sizeof($article));
    }

    //Récupération article par Id n'existant pas
    public function testgetArticleByIdNotExisting(){
        $article = $this->articleRepo->getArticleById(0);
        $this->assertEquals(0, sizeof($article));
    }

    //Récupération article par Id négatif
    public function testgetArticleByIdNegative(){
        $article = $this->articleRepo->getArticleById(-50);
        $this->assertEquals(0, sizeof($article));
    }


    //Récupération de la distance entre 2 villes
    public function testgetDistanceCity(){
        $distance = $this->articleRepo->getDistance('Paris,France', 'Marseille,France');
        $distanceReal = floatval(substr($distance, 0, strlen($distance) - 2));
        $this->assertTrue(750 <= $distanceReal * 1.60934 && $distanceReal * 1.60934 <= 800);
    }

    //Récupération de la distance entre 2 villes dont 1 inconnue
    public function testgetDistanceCityBad(){
        $distance = $this->articleRepo->getDistance('Paris,France', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa,France');
        $this->assertEquals(-42, floatval($distance));
    }

    //Article avec un prix négatif
    public function testNegativePrice(){
        $validator = Validation::createValidatorBuilder()->enableAnnotationMapping()->getValidator();
        $article = new Articles();
        $article->setPrice(-9000);
        $article->setDescription('test description');
        $article->setPlace('test lieu');
        $article->setCategory('test category');
        $article->setTitle('test title');
        $errors = $validator->validate($article);
        $this->assertEquals(1, count($errors));
    }

    //Article avec un prix étant une string
    public function testStringPrice(){
        $validator = Validation::createValidatorBuilder()->enableAnnotationMapping()->getValidator();
        $article = new Articles();
        $article->setPrice('test price');
        $article->setDescription('test description');
        $article->setPlace('test lieu');
        $article->setCategory('test category');
        $article->setTitle('test title');
        $errors = $validator->validate($article);
        $this->assertEquals(2, count($errors));
    }
}