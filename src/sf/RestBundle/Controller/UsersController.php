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

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use FOS\RestBundle\Controller\Annotations\View;

class UsersController extends Controller
{

    /**
     * @return array
     * @view()
     */
    public function getUsersAction()
    {
        $users = $this->getDoctrine()->getRepository('sfRestBundle:User')
                ->findAll();
        return array('users' => $users);
    }

}
