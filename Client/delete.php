<?php
	include('../connection.php');
	include('../response.php');
	include('../class.php');

	$ID=$_GET['id'];

    $sql= "DELETE FROM client WHERE ID=$ID";

    $result=mysqli_query($conn,$sql);

    if($result==true)
    {
    	response(1, "Suppression effectuée", NULL);
    }
    else
    {
    	response(0, "Erreur survenue pendant la suppression", NULL);
    }

    mysqli_close($conn);
?>