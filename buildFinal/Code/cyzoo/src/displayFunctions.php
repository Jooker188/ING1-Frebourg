<?php
    session_start();
    
    /******************************************** DISPLAY FUNCTIONS ********************************************/
    
    //Tests if user is connected, if so, a new button "log out" appears instead of "log in"
    function isConnected($src){
            if(isset($_SESSION["login"])){
                    $href = $src . "deconnexion.php";
                    echo("<a href=\"$href\"><button id=\"button\" style=\"font-size:20px;\">Log Out (" . $_SESSION['login'] . ")</button></a>");
            }
            else{
                $href = $src . "authentification.php";
                echo("<a href=\"$href\"><button id=\"button\">Connexion</button></a>");
            }
    }
    
    //Gets animal image according to current time : zebra, girafe or panda
    function getAnimal(){
          $heure = date("H");
          $minute = date("i");  
          echo("<div id=\"containerAnimal\" style=\"text-align: center;\">");
          echo("<p>It's $heure h $minute ! </p>");
          
          switch($heure){
                case $heure < 12:
                    $src = "img/zebra.jpg";
                    break;
                case $heure >= 12 && $heure < 20:
                    $src = "img/girafe.jpg";
                    break;
                case $heure >= 20:
                    $src = "img/panda.jpg";
                    break;    
          }
          echo("<img src=\"$src\" width=\"500px\" style=\"border : solid black 5px;\">");
          echo("</div>");
    }
    
    //Redirects to authentification if not connected
    function redirectionToAuth(){
        if(!isset($_SESSION["login"])){
            header("Location : /src/authentification.php");
        }
    }
    
    /******************************************** DATABASE FUNCTIONS *******************************************/
    
    //Gets all tickets, filtered by user status (admin or not)
    function getAllTickets(){
        
        //database connexion
        require_once("bddConnexion.php");
        
        $allowedUser = ["remydionisio@outlook.fr","romualdgrignon@cy-tech.fr"];
                
                if(isset($_SESSION["login"])){
                            
                            if(in_array($_SESSION["login"],$allowedUser)){
                                $sql = "SELECT * from ticket";
                                $req = $bdd->prepare($sql);
                            }
                            else{
                                $sql = "SELECT * from ticket WHERE login=:login";
                                $req = $bdd->prepare($sql);
                                $req->bindParam(":login", $_SESSION["login"]);
                                
                            }
                           
                            $req->execute();
                            foreach($req as $row){
                                echo '<tr>';
                                echo '<td>' . $row["id"] . '</td>';
                                echo '<td>' . $row["datet"] . '</td>';
                                echo '<td>' . $row["login"] . '</td>';
                                echo '<td>' . $row["subject"] . '</td>';
                                echo '<td>' . $row["description"] . '</td>';
                                echo '<td>' . $row["priority"] . '</td>';
                                echo '<td>' . $row["sector"] . '</td>';
                                ?>
                                <td id="<?php echo $row["id"]; ?>"><?php echo $row["status"]; ?></td>
                                <?php
                                echo '</tr>';
                            }
                           
                    
                    
                }else{
                    redirectionToAuth();
                }
                 
    }
?>