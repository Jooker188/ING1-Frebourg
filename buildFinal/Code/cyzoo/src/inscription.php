<?php
//database connexion
require_once("bddConnexion.php");

try{
    $sql = "SELECT * FROM accountZoo WHERE email=:login";
    $data = $bdd->prepare($sql);
    $data->bindParam(":login", $_POST["email"]);
    $data->execute();
    
    $user = $data->fetch();
    
    //if user is not in database
    if($user == 0){
        $sql = "INSERT INTO accountZoo (email,password,registration) VALUES(:email,:password,:date)";
        $data = $bdd->prepare($sql);
        
        $date = date('Y-m-d H:i:s');
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT,["cost" => 12]);
        
        $data->bindParam(":email", $_POST["email"]);
        $data->bindParam(":password", $password);
        $data->bindParam(":date", $date);
        
        $data->execute();
        
        $_SESSION["login"] = $_POST["email"];
        echo("0"); //no problem
    }
    else{
        echo("1"); // problem : user already have an account
    }
}
catch(PDOException $e){
        echo 'Error :' . $e->getMessage();
    }
?>