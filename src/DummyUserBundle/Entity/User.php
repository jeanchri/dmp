<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace DummyUserBundle\Entity;

/**
 * Description of User
 *
 * @author jctaussy
 */
class User {
    //put your code here
    /** @var string */
    protected $nir;
    
    /** @var string */
    protected $code;
    
    /** @var \DateTime */
    protected $date;
    
    
    function get_nir() {
        return $this->nir;
    }

    function get_code() {
        return $this->code;
    }

    function get_date() {
        return $this->date;
    }

    function set_nir($nir) {
        $this->nir = $nir;
        return $this;
    }

    function set_code($code) {
        $this->code = $code;
        return $this;
    }

    function set_date(\DateTime $date) {
        $this->date = $date;
        return $this;
    }


    

    
}
