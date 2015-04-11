<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DB
 *
 * @author 001195776
 */
class DB {

    private $PDO = null;
    
    function __construct() {
        $this->setPDO();
    }

    function getPDO() {
        return $this->PDO;
    }

    private function setPDO($PDO) {
        $this->PDO = new PDO("mysql:host=localhost;dbname=phpclassfall2014", "root", "");

    }


    
}
