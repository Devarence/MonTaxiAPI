
 <?php
	include('../connection.php');
	include('../response.php');
	include('../class.php');

	 $json= $_GET['json'];
    $client = json_decode($json);


    $sql= "UPDATE client SET (nom='$client->nom', pseudo = '$client->pseudo', password = '$chauffeur->password' , telephone = '$client->telephone', DateNaissance = '$client->DateNaissance', pays = '$client->pays', ville = '$client->ville')  
    WHERE ID='$client->id'";

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
