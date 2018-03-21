<?php

    include('../class.php');
    include('../response.php');
    include('../connection.php');

    $json= $_GET['json'];
    $taxi = json_decode($json);


    $sql = "INSERT INTO taxi (ChauffeurID,immatriculation, tarification, ModePaiement) VALUES ('$taxi->ChauffeurID', '$taxi->immatriculation', '$taxi->tarification', '$taxi->ModePaiement')"; 


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
                
           