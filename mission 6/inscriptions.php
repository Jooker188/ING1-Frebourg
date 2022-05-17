<?php
session_start();

$server = "localhost";
$user = "root";
$password = "";

try{
    $connection = new PDO("mysql:host=$server;dbname=zootickoon", $user, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql = "INSERT INTO account (email,password,registration) VALUES (:email,:password,:date)";
    $data = $connection->prepare($sql);
    $data->bindParam(":email", $_POST["email"]);
    $data->bindParam(":password", $_POST["password"]);
    $date = new DateTime('NOW');
    $StringDate = $date->format('d/m/Y');
    $data->bindParam(":date", $StringDate);
    $data->execute();
    echo "Succes";
}
catch(PDOException $e){
    echo 'Error :' . $e->getMessage();
}
?>