<?php 
class Chauffeur{

     // database connection and table name
    private $conn;
    private $table_name = "chauffeur";

    var $ID;
  	var $Nom;
  	var $Telephone;
	var $DateNaissance;
	var $Employeur;
    var $Nationalite;
    
      // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }


    function read(){
    // select all query
    $query = "SELECT * FROM  $this->table_name";
 
    // prepare query statement
    $stmt = $this->conn->prepare($query);
 
    // execute query
    $stmt->execute();
 
    return $stmt;
    }


    function create(){
     // query to insert record
     $query = "INSERT INTO $this->table_name SET nom=:Nom, telephone=:Telephone, DateNaissance=:DateNaissance, employeur=:Employeur, nationalite=:Nationalite";

    // prepare query
    $stmt = $this->conn->prepare($query);

    // sanitize
    $this->Nom=htmlspecialchars(strip_tags($this->Nom));
    $this->Telephone=htmlspecialchars(strip_tags($this->Telephone));
    $this->DateNaissance=htmlspecialchars(strip_tags($this->DateNaissance));
    $this->Employeur=htmlspecialchars(strip_tags($this->Employeur));
    $this->Nationalite=htmlspecialchars(strip_tags($this->Nationalite));

    // bind values
    $stmt->bindParam(":Nom", $this->Nom);
    $stmt->bindParam(":Telephone", $this->Telephone);
    $stmt->bindParam(":DateNaissance", $this->DateNaissance);
    $stmt->bindParam(":Employeur", $this->Employeur);
    $stmt->bindParam(":Nationalite", $this->Nationalite);

    // execute query
    if($stmt->execute()){

        return true;
    }

    return false;
    }


    function readOne(){
        $query = "SELECT chauffeur.*, taxi.immatriculation AS immatriculation, taxi.tarification as prix, taxi.ModePaiement as modepaiement
                    FROM $this->table_name  
                        JOIN taxi ON taxi.ChauffeurID = Chauffeur.ID 
                    WHERE Chauffeur.ID = ?
                    LIMIT
                     0,1";
        // prepare query statement
        $stmt = $this->conn->prepare( $query );

         // remplacement du ? par le id du chauffeur fretourner depuis le api create
        $stmt->bindParam(1, $this->ID);

        // execute query
        $stmt->execute();
        return $stmt;

         // get retrieved row
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
 
         // set values to object properties
        $this->Nom = $row['nom'];
        $this->Telephone = $row['telephone'];
        $this->DateNaissance = $row['DateNaissance'];
        $this->Employeur = $row['employeur'];
        $this->Nationalite = $row['nationalite'];
    }


    function update(){
 
        // update query
        $query = "UPDATE $this->table_name 
                SET nom=:Nom, telephone=:Telephone, DateNaissance=:DateNaissance, employeur=:Employeur, nationalite=:Nationalite
                WHERE ID = :ID";
     
        // prepare query statement
        $stmt = $this->conn->prepare($query);
     
         // sanitize
        $this->Nom=htmlspecialchars(strip_tags($this->Nom));
        $this->Telephone=htmlspecialchars(strip_tags($this->Telephone));
        $this->DateNaissance=htmlspecialchars(strip_tags($this->DateNaissance));
        $this->Employeur=htmlspecialchars(strip_tags($this->Employeur));
        $this->Nationalite=htmlspecialchars(strip_tags($this->Nationalite));
        $this->id=htmlspecialchars(strip_tags($this->ID));

        // bind values
        $stmt->bindParam(":Nom", $this->Nom);
        $stmt->bindParam(":Telephone", $this->Telephone);
        $stmt->bindParam(":DateNaissance", $this->DateNaissance);
        $stmt->bindParam(":Employeur", $this->Employeur);
        $stmt->bindParam(":Nationalite", $this->Nationalite);
        $stmt->bindParam(':ID', $this->ID);
     
        // execute the query
        if($stmt->execute()){
            return true;
        }
     
        return false;
    }


    function delete(){
        // delete query
    $query = "DELETE FROM $this->table_name WHERE id = ?";
 
    // prepare query
    $stmt = $this->conn->prepare($query);
 
    // sanitize
    $this->ID = htmlspecialchars(strip_tags($this->ID));
 
    // bind id of record to delete
    $stmt->bindParam(1, $this->ID);
 
    // execute query
    if($stmt->execute()){
        return true;
    }
 
    return false;
     
    }

}
?>