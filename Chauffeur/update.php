
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

	 $json = $_GET['json'];
    $chauffeur_json = json_decode($json);

    //affectation de l'id renvoyé par la selection et le json
   $chauffeur->ID = $chauffeur_json->id;

   //affectation des valeurs
   $chauffeur->Nom = $chauffeur_json->nom;
   $chauffeur->Telephone = $chauffeur_json->telephone;
   $chauffeur->DateNaissance = $chauffeur_json->datenaissance;
   $chauffeur->Employeur = $chauffeur_json->employeur;
   $chauffeur->Nationalite = $chauffeur_json->nationalite;

     // update the product
     if($chauffeur->update()){
       
        response(1, "Modification effectuee", NULL);
    }
 
    // if unable to create the product, tell the user
    else{

        response(0, "Erreur survenue pendant l'insertion", NULL);
    }
   

    mysqli_close($conn);
?>
