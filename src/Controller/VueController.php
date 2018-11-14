<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VueController extends AbstractController
{
    /**
     * @Route("/", name="index")
     * @Route("/{route}", name="vue_pages", requirements={"route"="^(?!api|_(profiler|wdt)).+"})
     */
    public function __invoke()
    {
        return $this->render('base.html.twig');
    }


}
