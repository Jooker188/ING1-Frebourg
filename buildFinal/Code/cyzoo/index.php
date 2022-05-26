<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Welcome</title>
    
    
    <link rel="stylesheet" href="../style/home.css">
    <link rel="stylesheet" href="../style/globalStyle.css">
    
    <link rel="icon" href="./img/logo.ico" />
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@500&display=swap" rel="stylesheet"> 
  </head>
  
  <body>
      <!-- ******************** HEADER ********************  -->

      <header>
            <img src="./img/logo.png" id="logo" alt="logo">
            <nav id="navmenu">
                <ul id="ulMenu">
                    <li><a href="index.php" class="active">Home</a></li>
                    <li><a href="src/formTicket.php">My Ticket</a></li>
                    <li><a href="src/afficheListeTickets.php">Tickets</a></li>
                    <li><a href="http://localhost/wordpress">Cy Zoo</a></li>
                </ul>
            </nav>

            <?php
            require_once("src/displayFunctions.php");
                       
            isConnected("src/");
            ?>
                    
    </header>

    <!-- ******************** ANIMAL DISPLAY ********************  -->

    <?php
    getAnimal();  
    ?>

       <!-- ******************** HOME PAGE ********************  -->

      <p class="marginLeft">The Cy Zoo is made of 4 sectors :</p>
      <div id="containerBox">
          <div id="box" > 
            <div class="center">
                <p style="font-size:30px;color:#ea7410;">Bud Sector</p>
                <img src="img/bud.jpg" class="img" alt="Mon image de test">
                <p>This is the area where you party with DJ Bud, people and Zinzins in the pool !</p>
                <p>Let's Pool Party Yeahhh. Area : 2500m² - Max Capacity : 400</p>
            </div>
            <div class="center">
                <p style="font-size:30px;color:#4a5fcc;">Gorgeous Sector</p>
                <img src="img/gorgeous.jpg" class="img" alt="Mon image de test">
                <p>Alongside Gorgeous, you will enjoy the amazing attractions of the Cy Zoo !</p>
                <p>Do not eat before... Area : 5000m² - Max Capacity : 1000</p>
            </div>
             <div  class="center">
                <p style="font-size:30px;color:#1b7f1b;">Candy Sector</p>
                <img src="img/candy.png" class="img" alt="Mon image de test">
                <p>This is the area where you can taste and learn the cook of Candy !</p>
                <p>You can buy some to take away. Area : 500m² - Max Capacity : 50</p>
            </div>
            <div  class="center">
                <p style="font-size:25px;color:#f760a8;">Etno Sector</p>
                <img src="img/etno.png" class="img" alt="Mon image de test">
                <p>This represents an amphitheatre where professor Etno will teach you the Zin language</p>
                <p>Etno calls this : "Learning Zone". Area : 750m² - Max Capacity : 400</p>
         </div>
    </div>
      </div>
    
     <!-- ******************** FOOTER ********************  -->

      <footer>
            <img src="./img/logo.png" id="logo" alt="logo">
            <nav id="navFooter">
                <ul id="footerMenu" >
                    <li class="li">@Copyrights 2022&emsp;&emsp;</li>
                    <li class="li">Made by <a href="https://remydionisio.fr" id="rd" style="font-size:20px;">Rémy Dionisio&emsp;</a></li>
                    <li><a href="https://github.com/Jooker188"><img src="./img/github.png" width="80px"/></a></li>
                </ul>
            </nav>
            
    </footer>
      
  </body>
</html>