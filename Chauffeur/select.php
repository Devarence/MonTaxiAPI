<?php

// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
  
include ('../connection.php');
include ('../entities/chauffeur.php');
include ('../response.php');

// instantiate database and product object
$connection = new Connection();
$db = $connection->getConnection();

// initialize object
$chauffeur = new Chauffeur($db);

// query products
$stmt = $chauffeur->read(); //$sql =  "SELECT *FROM chauffeur";
$num = $stmt->rowCount();

// check if more than 0 record found
if($num>0){
    
    //tableau crée afficher tout les resultats trouvés
    $chauffeur_arr = array();// $req=array();
  
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
          // extract row
        // this will make $row['name'] to
        // just $name only
        extract($row);
       
        /*$chauffeur_item=array(
            "id" => $ID,
            "nom" => $Nom,
            "telephone" => $Telephone,
            "datenaissance" => $DateNaissance,
            "employeur" => $Employeur,
            "nationalite" => $Nationalite
        );*/
        
        foreach($stmt as $rooi) 
         {
       //inserer une ou plusieurs valeurs à la fin du tableau
           array_push($chauffeur_arr, $rooi);                               
         }
    }
    response(1, "selection effectuee", $chauffeur_arr);
}
  else
     {

         response(0, "Erreur survenue pendant la selection", NULL);

     }

     mysqli_close($connection);

?>
