
 <?php
	include('../connection.php');
	include('../response.php');
	include('../class.php');

	 $json= $_GET['json'];
    $taxi = json_decode($json);


    $sql= "UPDATE taxi SET (immatriculation='$taxi->immatriculation', tarification = '$taxi->tarification', ModePaiement = '$taxi->ModePaiement')  
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
