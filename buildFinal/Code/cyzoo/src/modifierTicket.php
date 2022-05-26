<?php
//database connexion
require_once("bddConnexion.php");

try{
    if(isset($_POST['id'])){
        
        $sql = "update ticket set status=:status where id=:id";
        $data = $bdd->prepare($sql);
        
        $data->bindParam(":id",$_POST["id"]);
        $data->bindParam(":status",$_POST["status"]);
        
        $data->execute();
        
        $res = $data->rowCount();
        
        if($res > 0){
            echo "0"; // all good   
        }
        else{
            echo "1"; // problem : id doesn t exist
        }
    }
}

catch(PDOException $e){
    echo 'Error :' . $e->getMessage();
}

?>