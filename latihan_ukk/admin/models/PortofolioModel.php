<?php

class PortofolioModel{
        private $host   = DB_HOST;
        private $user   = DB_USER;
        private $pass   = DB_PASS;
        private $db_name=DB_NAME;
    
        private $dbh;
        private $stmt;
        function __construct()
        {
            //data source name
            $dsn = 'mysql:host='.$this->host. ';dbname='.$this->db_name;
            $option = [
                PDO::ATTR_PERSISTENT => true, //menjaga koneksinya terjaga
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ];
            try {
                $this->dbh = new PDO($dsn, $this->user, $this->pass, $option);
            } catch (PDOException $e) {
                die($e->getMessage());
    }
}