<?php
/**
 * Created by PhpStorm.
 * User: benjamin chambon
 * Date: 04/07/2017
 * Time: 16:57
 */

use AdSite\AdSiteBundle\Entity\Pictures;
use Symfony\Component\Validator\Validation;

require_once dirname(__DIR__) . '/app/AppKernel.php';

class PictureTest extends PHPUnit_Framework_TestCase
{
    protected $kernel;
    protected $entityManager;
    protected $container;
    protected $pictureRepo;


    public function setUp()
    {
        $this->kernel = new \AppKernel('test', true);
        $this->kernel->boot();
        $this->container = $this->kernel->getContainer();
        $this->entityManager = $this->container->get('doctrine')->getManager();
        $this->pictureRepo = $this->entityManager->getRepository('AdSiteBundle:Pictures');
        parent::setUp();
    }

    //Récupération picture par Id existant -> à modif avant la soutenance
    public function testgetPicturesById()
    {
        $pictures = $this->pictureRepo->getPicturesById(70);
        $this->assertEquals(1, sizeof($pictures));
    }

    //Récupération picture par Id non existant -> à modif avant la soutenance
    public function testgetPicturesByIdNotExisting()
    {
        $pictures = $this->pictureRepo->getPicturesById(0);
        $this->assertEquals(0, sizeof($pictures));
    }

    //Récupération picture par Id négatif -> à modif avant la soutenance
    public function testgetPicturesByIdNegative()
    {
        $pictures = $this->pictureRepo->getPicturesById(-30);
        $this->assertEquals(0, sizeof($pictures));
    }

}