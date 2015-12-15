<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UsersController
 *
 * @author otgonoo
 */

namespace sf\RestBundle\Controller;

use sf\RestBundle\Entity\User;
#use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations\View;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class UsersController extends FOSRestController
{

    /**
     * @return array
     * @View()
     */
    public function getUsersAction()
    {
        $users = $this->getDoctrine()->getRepository('sfRestBundle:User')
                ->findAll();
        $view = $this->view($users, 200);
                #->setTemplate("sfRestBundle:Users:getUsers.html.twig")
                #->setTemplateVar('users');

        return $this->handleView($view);
    }

    /**
     * @param User $user
     * @return array
     * @View()
     * @ParamConverter("user", class="sfRestBundle:User")
     */
    public function getUserAction(User $user)
    {
        return array('user' => $user);
    }

}
