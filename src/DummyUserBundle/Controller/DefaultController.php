<?php

namespace DummyUserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
    dump($this);
    return $this->render('DummyUserBundle:Default:index.html.twig');
    }
    
    public function exerciceAction()
    {
    dump($this);
    return $this->render('DummyUserBundle:Default:exercice.html.twig');
    }
}
