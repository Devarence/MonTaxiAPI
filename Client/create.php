<?php

    include('../class.php');
    include('../response.php');
    include('../connection.php');

    $json= $_GET['json'];
    $client = json_decode($json);


    $sql = "INSERT INTO client (nom, pseudo, password, telephone, DateNaissance, pays, ville, statut) VALUES ('$client->nom', '$client->pseudo', '$client->password', '$client->telephone', '$client->DateNaissance', '$client->pays', '$client->vile', '$client->statut')"; 

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
                
           