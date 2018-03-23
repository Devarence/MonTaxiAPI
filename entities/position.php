<?php
class Position{
     // database connection and table name
    private $conn;
    private $table_name = "position";

    var $ID;
	var $Latitude;
	var $Longitude;
    var $Type;
    
     // constructor with $db as database connection
     public function __construct($db){
        $this->conn = $db;
     }
}