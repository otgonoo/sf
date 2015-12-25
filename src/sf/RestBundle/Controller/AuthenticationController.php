<?php

namespace sf\RestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * AuthenticationController
 *
 * @author otgonoo
 */
class AuthenticationController extends Controller
{

    /**
     * @return JsonResponse
     */
    public function pingAction()
    {
        return new JsonResponse(array("reply"));
    }

}
