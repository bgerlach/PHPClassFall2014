<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Sample
 *
 * @author 001195776
 */
class Sample {

    private $db = "dataname";
    function getDb() {
        return $this->db;
    }

    function setDb($db) {
        $this->db = $db;
    }

     /**
 * Will echo out "say something"
 *
 * @return null
 */
    
    public function say(){
        
        echo 'say something';
    }
    
    
    
}
