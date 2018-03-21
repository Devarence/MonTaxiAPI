<?php


  class Chauffeur
  {
  	var $ID;
  	var $Nom;
  	var $Telephone;
		var $DateNaissance;
		var $Employeur;
		var $Nationalite;
  }

 class Client
   {
		var $ID;
		var $PositionID;
   	var $Nom;
   	var $Pseudo;
    var $Password;
   	var $Telephone;
   	var $DateNaissance;
   	var $Pays;
   	var $Ville;
   }

 class Reservation
  {
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
	}

  class Taxi
 {
 	var $ID;
	var $ChauffeurID;
	var $PositionID;
 	var $Immatriculation;
 	var $tarification;
	var $ModePaiement;
	var $localisation;//sera gerer automatiquement en fonction des coordonnées
	var $note;//sera automatique
 }

 class Position
 {
	 var $ID;
	 var $Latitude;
	 var $Longitude;
	 var $Type;
 }

?>