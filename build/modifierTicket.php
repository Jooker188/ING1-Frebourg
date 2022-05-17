<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="formTicket.css">
    <link rel="icon" href="./img/logo.ico" />
    <title>Ticket Cy Zoo</title>
</head>

  <body>

       <!-- ******************** HEADER ********************  -->

       <header>
        <img src="./img/logo.png" id="logo" alt="logo">
        <nav id="navmenu">
            <ul id="ulMenu">
                <li><a href="index.php">Home</a></li>
                <li><a href="formTicket.html" class="active">My Ticket</a></li>
                <li><a href="afficheListeTickets.php">Tickets</a></li>
                <li><a href="http://localhost/wordpress">Cy Zoo</a></li>
            </ul>
        </nav>
        <a href="authentification.html"><button id="button">Connexion</button></a>
        </header>
    </body>
</html>


<?php
$server = "localhost";
$user = "root";
$password = "";
try{
    $connection = new PDO("mysql:host=$server;dbname=zootickoon", $user, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
    if(isset($_POST['id'])){
        $id = $_POST["id"];
        $status = $_POST["status"];
        $sql = "update ticket set status='$status' where id=$id";
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