<?php 
    Class Connection{
        /* Database connection start */
        var $host = "localhost";
        var $username = "root";
        var $password = "";
        var $dbname = "montaxi";
        var $conn;
       
        public function getConnection() {

            $this->conn = null;
            try{
                $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname, $this->username, $this->password);
                $this->conn->exec("set names utf8");
            }
            catch(PDOException $exception){
                echo "La connexion a échoué:" . $exception->getMessage();
            } 

            return $this->conn;
        }
    }
?>

