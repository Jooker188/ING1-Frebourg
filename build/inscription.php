<?php
session_start();
$server = "localhost";
$user = "root";
$password = "";
$date = $date = date('Y-m-d H:i:s');
try{
    $connection = new PDO("mysql:host=$server;dbname=zootickoon", $user, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql = "INSERT INTO account (email,password,registration) VALUES(:email,:password,:date)";
    $data = $connection->prepare($sql);
    $data->bindParam(":email", $_POST["email"]);
    $data->bindParam(":password", $_POST["password"]);
    $data->bindParam(":date", $date);
    $data->execute();
    
    $_SESSION["login"] = $_POST["email"];
    header("Location:  https:/cyzoo.remydionisio.fr");
}
catch(PDOException $e){
        echo 'Error :' . $e->getMessage();
    }
?>