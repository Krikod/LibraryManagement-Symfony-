<?php

namespace KP\LibBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('KPLibBundle:Default:index.html.twig');
    }
}
