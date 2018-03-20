<?php

    include('../class.php');
    include('../response.php');
    include('../connection.php');

    $json= $_GET['json'];
    $chauffeur = json_decode($json);


    $sql = "INSERT INTO chauffeur (nom, telephone, DateNaissance, employeur, nationalite) VALUES ('$chauffeur->nom', '$chauffeur->telephone', '$chauffeur->DateNaissance', '$chauffeur->employeur', '$chauffeur->nationalite')"; 


    $result = mysqli_query($conn, $sql);


    if ($result == true)
    {

        response(1, "Insertion effectuee", NULL);

    }
    else
    {

        response(0, "Erreur survenue pendant l'insertion", NULL);

    }

    mysqli_close($conn);



?>
                
           