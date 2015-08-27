<?php

namespace AStar\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AStarDemoBundle:Default:index.html.twig', array('name' => $name));
    }
}
