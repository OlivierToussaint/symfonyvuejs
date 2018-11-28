<?php

declare(strict_types=1);

namespace App\Controller\Api;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Routing\Annotation\Route;


class SecurityController extends AbstractController
{
    /**
     * @Route("/api/login", name="api_login")
     *
     * @return Response
     */
    public function login(Request $request)
    {
        $user = $this->getUser();

        return $this->json(
            array(
                'username' => $user->getUsername(),
                'roles'    => $user->getRoles(),
            )
        );
    }

    /**
     * @Route("/api/logout", name="api_logout")
     *
     * @return Response
     */
    public function logout()
    {

    }

}