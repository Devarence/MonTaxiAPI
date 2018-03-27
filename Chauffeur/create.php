<?php

    // required headers
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    //header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    include('../connection.php');
    include('../entities/chauffeur.php');
    include('../response.php');

    // instantiate database and product object
    $connection = new Connection();
    $db = $connection->getConnection();

    // initialize object
    $chauffeur = new Chauffeur($db);

    $json= $_GET['json'];
    $chauffeur_json = json_decode($json);

    //recuperation des données entrées depuis le formulaire de création
    //$chauffeur_json = json_decode(file_get_contents("php://input"));

    //$sql = "INSERT INTO chauffeur (nom, telephone, DateNaissance, employeur, nationalite) VALUES ('$chauffeur->nom', '$chauffeur->telephone', '$chauffeur->DateNaissance', '$chauffeur->employeur', '$chauffeur->nationalite')"; 

    //affectation des valeurs
    $chauffeur->Nom = $chauffeur_json->nom;
    $chauffeur->Telephone = $chauffeur_json->telephone;
    $chauffeur->DateNaissance = $chauffeur_json->datenaissance;
    $chauffeur->Employeur = $chauffeur_json->employeur;
    $chauffeur->Nationalite = $chauffeur_json->nationalite;


    // create the product
    if($chauffeur->create()){
       
        response(1, "Insertion effectuee", NULL);
    }
 
    // if unable to create the product, tell the user
    else{

        response(0, "Erreur survenue pendant l'insertion", NULL);
    }
   
    mysqli_close($conn);

?>
                
           