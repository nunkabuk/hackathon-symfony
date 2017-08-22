<?php

namespace hacka\listeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('hackalisteBundle:Default:index.html.twig');
    }
}
