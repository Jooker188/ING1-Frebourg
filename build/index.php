<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="header.css">
    <link rel="icon" href="./img/logo.ico" />
    <title>Welcome</title>
  </head>
  <body>
      <!-- ******************** HEADER ********************  -->

      <header>
            <img src="./img/logo.png" id="logo" alt="logo">
            <nav id="navmenu">
                <ul id="ulMenu">
                    <li><a href="index.html" class="active">Home</a></li>
                    <li><a href="formTicket.html">My Ticket</a></li>
                    <li><a href="afficheListeTickets.php">Tickets</a></li>
                    <li><a href="http://localhost/wordpress">Cy Zoo</a></li>
                </ul>
            </nav>
            <?php
            session_start();
            if(isset($_SESSION["login"])){
                echo("<a href=\"deconnexion.php\"><button id=\"button\">Log Out</button></a>");
            }
            else{
                echo("<a href=\"authentification.html\"><button id=\"button\">Connexion</button></a>");
            }
            ?>
    </header>

    <!-- ******************** PHP MODIFICATIONS ********************  -->

    <?php
      $heure = date("H");
      $minute = date("i");  
      echo("<div id=\"containerAnimal\" style=\"text-align: center;\">");
      echo("<p>It's $heure h $minute ! </p>");
      switch($heure){
            case $heure < 12:
                echo("<img src=\"img/zebra.jpg\" width=\"500px\" >");
                break;
            case $heure >= 12 && $heure < 20:
                echo("<img src=\"img/girafe.jpg\" width=\"500px\">");
                break;
            case $heure >= 20:
                echo("<img src=\"img/panda.jpg\" width=\"500px\">");
                break;    
      }
      echo("</div>");
      ?>

       <!-- ******************** NORMAL HOME PAGE ********************  -->

      <p class="marginLeft">The Cy Zoo is made of 4 sectors :</p>
      <div id="sectors1"> 
        <div id="sector1" class="center">
            <p>Sector 1 : Aqualand</p>
            <img src="img/aqualand.jpeg" class="img" alt="Mon image de test">
            <p>This is the area where you can play with people and Zinzins in the pool !</p>
            <p>Aqualand is a 1500m² aera where 50 Zinzins live. The maximal capacity is 200.</p>
        </div>
        <div id="sector2" class="center">
            <p>Sector 2 : Attraction Zone</p>
            <img src="img/attraction.jpg" class="img" alt="Mon image de test">
            <p>This is the area where you can play with people and Zinzins in the pool !</p>
            <p>Aqualand is a 1500m² aera where 50 Zinzins live. The maximal capacity is 200.</p>
        </div>
    </div>
    <div id="sectors2">
        <div id="sector3" class="center">
            <p>Sector 3 : Memories Zone</p>
            <img src="img/photo.webp" class="img" alt="Mon image de test">
            <p>This is the area where you can play with people and Zinzins in the pool !</p>
            <p>Aqualand is a 1500m² aera where 50 Zinzins live. The maximal capacity is 200.</p>
        </div>
        <div id="sector4" class="center">
            <p>Sector 4 : Learning Zone</p>
            <img src="img/learning.jpg" class="img" alt="Mon image de test">
            <p>This is the area where you can play with people and Zinzins in the pool !</p>
            <p>Aqualand is a 1500m² aera where 50 Zinzins live. The maximal capacity is 200.</p>
        </div>
    </div>
      
  </body>
</html>