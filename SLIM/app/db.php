<?php 
        class db
         {
            //properties
            private $dbhost = "localhost";
            private $dbuser = "root";
            private $dbpw = ""; 
            private $dbname = "slim"; 
         
            //connection 
            public function connect()
            {
                $mysql_con_string = "mysql:host=$this->dbhost;dbname=$this->dbname"; 
                $dbConnection = new PDO ($mysql_con_string, $this->dbuser, $this->dbpw);
                $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
                return $dbConnection;  
            }
         }
         