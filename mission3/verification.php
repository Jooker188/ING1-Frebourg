<?php

$server = "localhost";
$user = "root";
$password = "";

try{
    $connection = new PDO("mysql:host=$server;dbname=zootickoon", $user, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql = "SELECT count(*) as total FROM account WHERE email=:email AND password=:password";
    $data = $connection->prepare($sql);
    $data->bindParam(":email", $_POST["email"]);
    $data->bindParam(":password", $_POST["password"]);
    $data->execute();

    $row = $data->fetch(PDO::FETCH_ASSOC);
    if($row["total"] > 0){
        session_start();
        $_SESSION['login'] = $_POST["email"];
        header("Location: http://localhost/index.php");
        exit();
    }
    else{
        echo "User not known";
    }
}
catch(PDOException $e){
    echo 'Error :' . $e->getMessage();
}

/*
$json = file_get_contents('login.json');
$json_data = json_decode($json,true);

foreach($json_data as $logs){
      
    foreach($logs as $login){
       if(strtoupper($email) == strtoupper($login["email"]) && strtoupper($password) == strtoupper($login["mdp"])){
          $conn = true;
          $_SESSION['email'] = $email ;   
       }
    }
    
}

if($conn){         
    echo 'Vous êtes connecté : ' . $_SESSION['email'] ;
    $date = strftime("%d/%m/%y %H:%M:%S");
    $fp = fopen('long.log', 'a');
    fwrite($fp, $email . "\r\n" . $password . "\r\n" . $date);
    fclose($fp);
}
else{ 
    echo "<div>User not known</div>";
}
}
else{
header('Location: authentification.html');
}
*/
?>