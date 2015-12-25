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
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations\View;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Lexik\Bundle\JWTAuthenticationBundle\TokenExtractor\AuthorizationHeaderTokenExtractor;
use Lexik\Bundle\JWTAuthenticationBundle\Encoder\JWTEncoder;

class UsersController extends FOSRestController
{

    /**
     * @throws AccessDeniedException
     * @return array
     * @View()
     */
    public function getUsersAction(Request $request)
    {
        //print_r($request->headers->get("Authorization"));
        $token = new AuthorizationHeaderTokenExtractor("Bearer");
        $token = $token->extract($request);

        $encoder = new JWTEncoder($this->getParameter('jwt_private_key_path'), $this->getParameter('jwt_public_key_path'), $this->getParameter('jwt_key_pass_phrase'));
        $data = $encoder->decode($token);
        print_r($data);
        die();
        if (!$this->get('security.context')->isGranted('ROLE_USER')) {
            throw new AccessDeniedException();
        }
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

    /**
     * @return array
     * @View()
     */
    public function pingTestAction()
    {
        
    }

}
