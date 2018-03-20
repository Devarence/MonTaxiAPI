<?php

  include('../connection.php');
  include('../response.php');
  include('../class.php');

    $ID=$_GET['id'];
    
    $sql= "SELECT nom, telephone, pays, ville
    FROM client
    WHERE ID = $ID";


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