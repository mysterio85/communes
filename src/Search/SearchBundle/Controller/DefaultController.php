<?php

namespace Search\SearchBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SearchSearchBundle:Default:index.html.twig', array('name' => $name));
    }
}
