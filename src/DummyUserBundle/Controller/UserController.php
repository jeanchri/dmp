<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace DummyUserBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * Description of UserController
 *
 * @author jctaussy
 */
class UserController extends Controller 
{
    
    public function searchAction () 
    {
        $user= new User;
        $this->createForm(UserType::class, $user);
        return $this->render('DummyUserBundle:User:search.html.twig');
    }
    
    
    
}
