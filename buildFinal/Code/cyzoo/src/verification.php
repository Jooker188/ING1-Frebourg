<?php

//database connexion
require_once("bddConnexion.php");

try{
 
    $sql = "SELECT * FROM accountZoo WHERE email=:email";
    $data = $bdd->prepare($sql);
    
    $data->bindParam(":email", $_POST["email"]);
    
    $data->execute();

    $row = $data->fetch();

    if($row){
        if(password_verify($_POST["password"], $row["password"])){
                $_SESSION["login"] = $_POST["email"];
                echo("0"); // all good
        }
        else{
            echo("2"); // problem : invalid password
        }
    }
    else{
        echo("1"); //problem : invalid email
    }
}
catch(PDOException $e){
    echo 'Error :' . $e->getMessage();
}
?>