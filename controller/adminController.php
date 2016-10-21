<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of adminController
 *
 * @author user
 */
include  dirname(__FILE__).'/../model/adminModel.php';

class adminController {
        
        public $model;
        
        public function __construct() {
               $this->model = new adminModel;
        }
        public function test(){
                
                
        }
}
