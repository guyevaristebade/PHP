<?php
    class DataBase{
        public static $instance = null;
        public $hostname = "localhost";
        public $dbname = "gsmaintenancef";
        public $username = "root";
        public $password = "Petitmiracle99";
        private $conn;

        private function __construct(){
            try {
                $this->conn = new PDO("mysql:host=".$this->hostname."; dbname=".$this->dbname, $this->username, $this->password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "Connection";
            } catch (PDOException $th) {
                echo  "Une erreur s'est produite lors de la connexion à la base de donnée". $th . "\n";
            }
        }
    
        public static function getInstance()
        {
          if(!self::$instance)
          {
            self::$instance = new DataBase();
          }
         
          return self::$instance;
        }

        public function getConnection(){
            return $this->conn;
        }

        public function disconnect(){
            $this->conn = null;
            $this->instance = null;
        }
    }
?>