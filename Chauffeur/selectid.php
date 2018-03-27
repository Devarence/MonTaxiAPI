<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');

include('../connection.php');
include('../response.php');
include('../entities/chauffeur.php');

// instantiate database and product object
$connection = new Connection();
$db = $connection->getConnection();

// initialize object
$chauffeur = new Chauffeur($db);

   $json= $_GET['json'];
   $chauffeur_json= json_decode($json);

   //affectation de l'id renvoyé par la selection et le json
   $chauffeur->ID = $chauffeur_json->id;

   // read the details of chauffeur to be edited
  $chauffeur->readOne();
  //creation d'un tableau
  $chauffeur_arr = array();
  
     //tableau crée afficher tout les resultats trouvés

    foreach($stmt as $rooi) 
        {
      //inserer une ou plusieurs valeurs à la fin du tableau
          $chauffeur_arr=$rooi;                            
        }

    if($stmt==true)
    {
      response(1, "Recherche trouvee", $chauffeur_arr);
    }
    else
    {
      response(0, "Erreur survenue pendant la recherche", NULL);
    }

    mysqli_close($conn);

?>