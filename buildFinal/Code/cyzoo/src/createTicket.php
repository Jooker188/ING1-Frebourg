<?php
//database connexion
require_once("bddConnexion.php");

try{
    
    $sql = "INSERT INTO ticket (id,datet,login,subject,description,priority,sector,status) VALUES (NULL,:datet,:login,:subject,:description,:priority,:sector,:status)";
<<<<<<< HEAD
    
=======
>>>>>>> ad897901f6a43a017e69f2c498cfba693ca6e534
    $data = $bdd->prepare($sql);
    
    $date = date('Y-m-d H:i:s');
    
    $data->bindParam(":datet", $date);
    $data->bindParam(":login", $_SESSION["login"]);
    $data->bindParam(":subject", $_POST["subject"]);
    $data->bindParam(":description", $_POST["description"]);
    $data->bindParam(":priority", $_POST["priority"]);
    $data->bindParam(":sector", $_POST["sector"]);
    $data->bindParam(":status", $_POST["status"]);
    
    $data->execute();

    header("Location: /src/afficheListeTickets.php");
}
catch(PDOException $e){
    echo 'Error :' . $e->getMessage();
}
?>
