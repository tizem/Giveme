<?php

namespace Test\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TestFrontBundle:Default:index.html.twig');
    }
}
