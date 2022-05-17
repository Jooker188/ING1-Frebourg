<?php
$server = "sql364.main-hosting.eu";
$user = "u880195269_rd";
$password = "Jidtmc18";
$dbname = "u880195269_remytoon";
try{
    $conn = new PDO("mysql:host=$server;dbname=$dbname", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO account (email, password, date, points) VALUES (:email, :password, :date, 0)";
    $data = $conn->prepare($sql);

    $data->bindParam(":email", $_POST["email"]);
    $data->bindParam(":password", $_POST["password"]);
    $date = new DateTime('NOW');
    $StringDate = $date->format('d/m/Y');
    $data->bindParam(":date", $StringDate);
    $data->execute();
    header("Location: http://localhost:3000/");
}
catch(PDOException $e){
    echo 'Error :' . $e->getMessage();
}
?>