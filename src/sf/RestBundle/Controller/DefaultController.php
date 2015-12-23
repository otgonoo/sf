<?php

namespace sf\RestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{

    /**
     * @Route("/getList")
     */
    public function indexAction()
    {
        //$client = $this->createAuthenticatedClient($request);
        //$client->request('GET', '/api/ping');
        $request = Request::create('/api/login_check', 'POST', array('_username' => "admin", '_password' => "123"));

        $data = json_decode($request->getContent(), true);
        print_r($request->getContent());
        die("tester");
        /* $request->setServerParameter('HTTP_Authorization', sprintf('Bearer %s', $data['token'])); */

        return $this->render('sfRestBundle:Default:index.html.twig');
    }

    /**
     * @Route("/api/ping")
     */
    public function pingAction()
    {
        return new JsonResponse(array('test' => 'tester'));
    }

}
