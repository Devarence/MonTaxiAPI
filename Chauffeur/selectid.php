<?php

  include('../connection.php');
  include('../response.php');
  include('../class.php');

   $jsonData = $_GET['json'];

   $chauffeur= json_decode($jsonData);
  
    $sql= "SELECT  chauffeur.*, taxi.immatriculation AS immatriculation, taxi.tarification as prix, taxi.ModePaiement as modepaiement
    FROM chauffeur
    JOIN taxi ON taxi.ChauffeurID = Chauffeur.ID";


    $result=mysqli_query($conn,$sql);

     //tableau crée afficher tout les resultats trouvés

    foreach($result as $rooi) 
        {
      //inserer une ou plusieurs valeurs à la fin du tableau
          $req=$rooi;                            
        }

    if($result==true)
    {
      response(1, "Recherche trouvee", $req);
    }
    else
    {
      response(0, "Erreur survenue pendant la recherche", NULL);
    }

    mysqli_close($conn);

?>