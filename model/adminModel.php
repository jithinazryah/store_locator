<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of adminModel
 *
 * @author user
 */
include  dirname(__FILE__).'/../model/databaseConnection.php';
class adminModel {

        public $con;
        public $conn;

        public function __construct() {
                $this->conn = 'jithin';
               $obj = new databaseConnection;
               $this->con = $obj->connect();
        }
        
        public function test(){
                echo "testingg";exit;
               mysqli_query($this->con,'select * from admin_posts');
        }

}
