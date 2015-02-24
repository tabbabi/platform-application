<?php

namespace App\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AppDemoBundle:Default:index.html.twig', array());
    }
}
