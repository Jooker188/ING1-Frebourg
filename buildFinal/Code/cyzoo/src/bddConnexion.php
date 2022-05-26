<?php
    //Initialization of the connexion to the database
        session_start();
        
        $server = "localhost";
        $user = "u880195269_rd";
        $password = "Jidtmc18";
        
        try{
            $bdd = new PDO("mysql:host=$server;dbname=u880195269_remytoon", $user, $password);
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e){
            echo 'Error :' . $e->getMessage();
        }
    
?>