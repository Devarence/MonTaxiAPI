<?php
class Reservation{
     // database connection and table name
    private $conn;
    private $table_name = "reservation";

    var $ID;
  	var $ClientID;
  	var $TaxiID;
  	var $Depart;
  	var $Arrivee;
	var $DateHeure;
	var $NombrePersonne;
	var $Montant;//si le client n'a pas de compte alors il renseigne lui mem ce champs sinon 
								//ce champ est fait auto fr/km
  	var $Arrangement;
	var $Modepaiement;
	var $lat;
	var $lng;
	var $type;
    var $Statut;//si la commande a été effectué ou en cours
    
      // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
     }
}