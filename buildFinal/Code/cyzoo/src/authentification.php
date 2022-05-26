<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Authentification</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <link rel="stylesheet" href="../style/auth.css">
    <link rel="stylesheet" href="../style/globalStyle.css">
    <link rel="stylesheet" href="../style/formTicket.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    <script src="auth.js"></script>
    
</head>
  <body>

     <!-- ******************** HEADER ********************  -->

      <header>
            <img src="../img/logo.png" id="logo" alt="logo">
            <nav id="navmenu">
                <ul id="ulMenu">
                    <li><a href="/" class="active">Home</a></li>
                    <li><a href="formTicket.php">My Ticket</a></li>
                    <li><a href="afficheListeTickets.php">Tickets</a></li>
                    <li><a href="http://localhost/wordpress">Cy Zoo</a></li>
                </ul>
            </nav>
            <?php
            require_once("displayFunctions.php");
            
            isConnected("");
            ?>
    </header>

    <!-- ******************** AUTHENTIFICATION FORMS ********************  -->

    <div id="containerSplit">
       
            <div id="login">
                <p style="text-align: center; font-size: 45px;">Log In</p>
                <form method="POST" onsubmit="return false;" id="form1">
                <label class="emailLabel">Email</label>
                <input type="email" name="email" class="form-control" id="emailC" placeholder="Enter your email" style="width:60%;">
                <label>Password</label>
                <input minlength="8" type="password" name="password"  id="passwordC"class="form-control" placeholder="Enter your Password" style="width:60%;" required>
                <small>Cy Zoo will never share these informations with anyone</small>
                <p id="errorC" style="color:red;"></p>
                <p></p>
                <button onclick="connexion();" class="btn btn-primary" id="connB">Submit</button>
                </form>
            </div>
        
            <div id="signin">
                <p style="text-align: center;font-size: 45px;">Sign In</p>
                <form method="POST" onsubmit="return false;">
                <label class="emailLabel">Email</label>
                <input id="email"type="email" name="email" class="form-control" placeholder="Enter your email" style="width:60%;">
                <label>Password</label>
                <input id="password" minlength="8" type="password" name="password"  placeholder="Enter your Password" class="form-control" style="width:60%;" required>
                <small>Minimum 8 characters, 1 uppercase, 1 lowercase, 1 digit and 1 special character</small>
                <p id="error" style="color:red;"></p>
                <p></p>
                <button type="submit" class="btn btn-primary" id="regisB" onclick="inscription();">Submit</button>
                </form>
            </div>
    </div>

     <!-- ******************** FOOTER ********************  -->

      <footer class="footer">
            <img src="../img/logo.png" id="logo" alt="logo">
            <nav id="navFooter">
                <ul id="footerMenu" >
                    <li class="li">@Copyrights 2022&emsp;&emsp;</li>
                    <li class="li">Made by <a href="https://remydionisio.fr" id="rd" style="font-size:20px;">Rémy Dionisio&emsp;</a></li>
                    <li><a href="https://github.com/Jooker188"><img src="../img/github.png" width="80px"/></a></li>
                </ul>
            </nav>
            
    </footer>

</body>
</html>