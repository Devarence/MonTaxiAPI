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
   	var $Nom;
   	var $Pseudo;
    var $Password;
   	var $Telephone;
   	var $DateNaissance;
   	var $Pays;
   	var $Ville;
   	var $Statut;//savoir si le client a un compte
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
  	var $Montant;
  	var $Arrangement;
  	var $Modepaiement;
  	var $Statut;//si la commande a été effectué ou en cours
	}

  class Taxi
 {
 	var $ID;
 	var $ChauffeurID;
 	var $Immatriculation;
 	var $tarification;
 	var $ModePaiement;
 }

?>