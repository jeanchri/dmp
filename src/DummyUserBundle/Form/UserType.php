<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace DummyUserBundle\Form;

use Symphony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class UserType extends AbstractType
{
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('nir', TextType::class)
                ->add('code', TextType::class)
                ->add('date', DateType::class)
                ->add('submit', SubmitType::class)
        ;
    }
    
}