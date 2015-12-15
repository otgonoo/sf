<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LoadUserData
 *
 * @author otgonoo
 */

namespace sf\RestBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\Doctrine;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use sf\RestBundle\Entity\User;

class LoadUserData implements FixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * 
     */
    public function load(ObjectManager $manager)
    {
        $dondog = new User();
        $dondog->setUsername("dondog");
        $dondog->setEmail("dondog@gmail.com");
        $dondog->setPassword("123");

        $dulam = new User();
        $dulam->setUsername("dulam");
        $dulam->setEmail("dulam@gmail.com");
        $dulam->setPassword("123");
        $manager->persist($dondog);
        $manager->persist($dulam);
        $manager->flush();
    }

//put your code here
}
