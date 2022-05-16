<?php
$server = "localhost";
$user = "root";
$password = "";
try{
    $connection = new PDO("mysql:host=$server;dbname=zootickoon", $user, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $id = $_POST["id"];
    if($_POST['change'] == "y"){
        $sql = "update ticket set status='fixed' where id=$id";
        $req = $connection->query($sql);
        echo "Successful operation !";
    }
    else{
        echo "No changes !";
    }
}

catch(PDOException $e){
    echo 'Error :' . $e->getMessage();
}

?>