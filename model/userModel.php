<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of userModel
 *
 * @author user
 */
include  dirname(__FILE__).'/../model/databaseConnection.php';
class userModel {
         protected $con;

        public function __construct() {
                
               $obj = new databaseConnection;
               $this->con = $obj->connect();
        }
        
        public function test(){
               mysqli_query($this->con,'select * from admin_posts'); 
        }
}
