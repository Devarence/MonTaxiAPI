<?php
class Taxi{
     // database connection and table name
    private $conn;
    private $table_name = "taxi";

    var $ID;
	var $ChauffeurID;
	var $PositionID;
 	var $Immatriculation;
 	var $tarification;
	var $ModePaiement;
	var $localisation;//sera gerer automatiquement en fonction des coordonnées
    var $note;//sera automatique
    
     // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
     }

}