<?php

    // required headers
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

	include('../connection.php');
	include('../response.php');
    include('../entities/chauffeur.php');
    
    // instantiate database and product object
    $connection = new Connection();
    $db = $connection->getConnection();

    // initialize object
    $chauffeur = new Chauffeur($db);
    
    //recuperation des données et du id
    $json = $_GET['json'];
    $chauffeur_json = json_decode($json);

    //affectation de l'id renvoyé par la selection et le json
   $chauffeur->ID = $chauffeur_json->id;

    //$sql= "DELETE FROM chauffeur WHERE ID=$ID";

    // delete the product
    if($chauffeur->delete()){
       
        response(1, "chauffeur supprimee", NULL);
    }
 
    // if unable to create the product, tell the user
    else{

        response(0, "Erreur survenue pendant la suppression", NULL);
    }

    mysqli_close($conn);
?>