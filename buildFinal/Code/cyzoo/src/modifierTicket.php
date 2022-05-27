<?php
//database connexion
require_once("bddConnexion.php");

try{
    if(isset($_POST['id'])){
        
        $sql = "update ticket set status=:status where id=:id AND login=:login";
        $data = $bdd->prepare($sql);
        
        $data->bindParam(":id",$_POST["id"]);
        $data->bindParam(":status",$_POST["status"]);
        $data->bindParam(":login",$_SESSION["login"]);
        
        $data->execute();
        
        $res = $data->rowCount();
        
        if($res > 0){
            echo "0"; // successful modifications
        }
        else{
            echo "1"; // no modifications
        }
    }
}

catch(PDOException $e){
    echo 'Error :' . $e->getMessage();
}

?>