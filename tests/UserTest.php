<?php
/**
 * Created by PhpStorm.
 * User: benjamin chambon
 * Date: 04/07/2017
 * Time: 16:57
 */

use AdSite\AdSiteBundle\Entity\User;
use Symfony\Component\Validator\Validation;

require_once dirname(__DIR__) . '/app/AppKernel.php';

class UserTest extends PHPUnit_Framework_TestCase
{
    protected $kernel;
    protected $entityManager;
    protected $container;
    protected $userRepo;


    public function setUp()
    {
        $this->kernel = new \AppKernel('test', true);
        $this->kernel->boot();
        $this->container = $this->kernel->getContainer();
        $this->entityManager = $this->container->get('doctrine')->getManager();
        $this->userRepo = $this->entityManager->getRepository('AdSiteBundle:User');
        parent::setUp();
    }

    //Check user existe avec login et pass ok
    public function testcheckUserExist()
    {
        $user = $this->userRepo->checkUserExist('julien',md5('toto'));
        $this->assertTrue($user);
    }


    //Check user existe avec mauvais password, bon login
    public function testcheckUserExistWrongPass()
    {
        $user = $this->userRepo->checkUserExist('julien',md5('totoifififif'));
        $this->assertFalse($user);
    }

    //Check user existe avec bon password, mauvais login
    public function testcheckUserExistWrongLogin()
    {
        $user = $this->userRepo->checkUserExist('diedede',md5('toto'));
        $this->assertFalse($user);
    }

    //Récupération Id user existant
    public function testgetUserId(){
        $user = $this->userRepo->getUserId('julien',md5('toto'));
        $this->assertEquals(12, $user[0]['id']);
    }

    //Récupération Id user non existant
    public function testgetUserIdNotExisting(){
        $user = $this->userRepo->getUserId('julienffff',md5('toto'));
        $this->assertEquals(0, sizeof($user));
    }

    //Récupération User par Id existant -> a modifier avant la soutenance
    public function testgetUser(){
        $user = $this->userRepo->getUser(12);
        $this->assertEquals(12, $user[0]->getId());
    }

    //Récupération User par Id non existant -> a modifier avant la soutenance
    public function testgetUserNotExisting(){
        $user = $this->userRepo->getUser(0);
        $this->assertEquals(0, sizeof($user));
    }


}