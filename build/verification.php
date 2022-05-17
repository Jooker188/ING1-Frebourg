<?php
session_start();
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
        $_SESSION['login'] = $_POST["email"];
        header("Location: https:/cyzoo.remydionisio.fr");
        exit();
    }
    else{
        #echo "0";
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="utf-8">
            <title>Authentification</title>
            <link rel="stylesheet" href="formTicket.css">
            <link rel="stylesheet" href="header.css">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <style>
                body{
                    background-color: #50358c;
                }
                #forms{
                    display: flex;
                    justify-content: space-around;
                    padding-top: 5%;
                }

            </style>
        </head>
        <body>

            <!-- ******************** HEADER ********************  -->

            <header style="display: flex;">
                <img src="./img/logo.png" id="logo" alt="logo">
                <nav id="navmenu">
                    <ul id="ulMenu">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="formTicket.html">My Ticket</a></li>
                        <li><a href="afficheListeTickets.php">Tickets</a></li>
                        <li><a href="http://localhost/wordpress">Cy Zoo</a></li>
                    </ul>
                </nav>
                <a href="authentification.html"><button id="button">Connexion</button></a>
        </header>

            <!-- ******************** AUTHENTIFICATION ********************  -->

            <ul id="forms">
                <li style="list-style-type: none;">
                    <div class="centerLeft">
                        <p style="text-align: center; font-size: 45px;">Log In</p>
                        <form method="POST" action="verification.php" id="form1">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email">
                        <label>Password</label>
                        <input minlength="8" type="password" name="password"  id="password"class="form-control" placeholder="Enter your Password" required>
                        <small  style="color:red;">Invalids creditentials</small>
                        <p></p>
                        <button onclick="fetchData();" class="btn btn-primary" id="connB">Submit</button>
                        </form>
                    </div>
                </li>
                <li style="list-style-type: none;">
                    <div class="centerRight">
                        <p style="text-align: center;font-size: 45px;">Sign In</p>
                        <form method="POST" action="inscription.php">
                        <label>Email</label>
                        <input id="email"type="email" name="email" class="form-control" placeholder="Enter your email">
                        <label>Password</label>
                        <input id="password" minlength="8" type="password" name="password" class="form-control" placeholder="Enter your Password" required>
                        <small class="form-text text-muted"></small>
                        <p></p>
                        <button type="submit" class="btn btn-primary" id="regisB">Submit</button>
                        </form>
                    </div>
                </li>
            </ul>
        </body>
        </html>
        <?php

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