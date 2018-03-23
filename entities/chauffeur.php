<?php 
class Chauffeur{

     // database connection and table name
    private $conn;
    private $table_name = "chauffeur";

    var $ID;
  	var $Nom;
  	var $Telephone;
	var $DateNaissance;
	var $Employeur;
    var $Nationalite;
    
      // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }
}

function read(){
    // select all query
    $query = "SELECT * FROM  '$this->table_name'";
 
    // prepare query statement
    $stmt = $this->conn->prepare($query);
 
    // execute query
    $stmt->execute();
 
    return $stmt;
}
?>