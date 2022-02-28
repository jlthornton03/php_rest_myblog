<?php
    class Database {
        //DB Params
        private $host = 'eanl4i1omny740jw.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
        private $dbname = 'sikqs5dxp6xtbo78';
        private $username = 'naz3cbsk74out143';
        //private $password = getenv('mysqlpwd');
        //private $host = 'localhost';
        //private $dbname = 'myblog';
        //private $username = 'root';
        private $password = '';
        private $conn;

        //DB Connect
        function __construct() {
            $this->password = getenv('mysqlpwd');
        }

        public function connect() {
            $this->conn = null;
            try{
                $this->conn = new PDO('mysql:host=' . $this->host . ';dbname='. $this->dbname, $this->username, $this->password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }catch(PDOException $e){
                echo 'Connection Error: ' . $e->getMessage();
            }
        return $this->conn;
        }
    }