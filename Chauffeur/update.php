
 <?php
	include('../connection.php');
	include('../response.php');
	include('../class.php');

	 $json= $_GET['json'];
    $chauffeur = json_decode($json);


    $sql= "UPDATE chauffeur SET (nom='$chauffeur->nom', telephone = '$chauffeur->telephone', DateNaissance = '$chauffeur->DateNaissance' , employeur = '$chauffeur->employeur', nationalite = '$chauffeur->nationalite')  
    WHERE ID='$chauffeur->id'";

    $result=mysqli_query($conn,$sql);

    if($result==true)
    {
    	response(1, "Modification effectuee",NULL);
    }
    else
    {
    	response(0, "Erreur survenue pendant la modification", NULL);
    }

    mysqli_close($conn);
?>
