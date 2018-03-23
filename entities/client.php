<?php
class Client{
     // database connection and table name
    private $conn;
    private $table_name = "client";

    var $ID;
    var $PositionID;
    var $Nom;
    var $Pseudo;
    var $Password;
    var $Telephone;
    var $DateNaissance;
    var $Pays;
    var $Ville;

     // constructor with $db as database connection
     public function __construct($db){
        $this->conn = $db;
     }
}