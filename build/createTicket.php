<?php
$server = "localhost";
$user = "root";
$password = "";
$date = date('Y-m-d H:i:s');
try{
    $connection = new PDO("mysql:host=$server;dbname=zootickoon", $user, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql = "INSERT INTO ticket (id,datet,login,subject,description,priority,sector,status) VALUES (NULL,:datet,:login,:subject,:description,:priority,:sector,:status)";
    $data = $connection->prepare($sql);
    $data->bindParam(":datet", $date);
    $data->bindParam(":login", $_POST["login"]);
    $data->bindParam(":subject", $_POST["subject"]);
    $data->bindParam(":description", $_POST["description"]);
    $data->bindParam(":priority", $_POST["priority"]);
    $data->bindParam(":sector", $_POST["sector"]);
    $data->bindParam(":status", $_POST["status"]);
    $data->execute();
    header("Location: https:/cyzoo.remydionisio.fr/afficheListeTickets.php");
}
catch(PDOException $e){
    echo 'Error :' . $e->getMessage();
}
?>