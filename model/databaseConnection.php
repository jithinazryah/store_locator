<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of databaseConnection
 *
 * @author user
 */
class databaseConnection {

        protected $host = 'Localhost';
        protected $userName = 'root';
        protected $password = 'mysql';
        protected $dbName = 'emperor';

        public function connect() {

                $con = mysqli_connect($this->host, $this->userName, $this->password, $this->dbName);

                if (mysqli_connect_errno()) {
                        echo "Failed to connect to MySQL: " . mysqli_connect_error();
                } else {
                        return $con;
                }
        }

}
