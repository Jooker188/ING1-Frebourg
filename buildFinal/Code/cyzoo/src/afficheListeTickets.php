<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Tickets</title>
      
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
      
      <link rel="stylesheet" href="../style/globalStyle.css">
      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      
      <script src="modifTicket.js"></script>
      
    <style>
        body{
            background-color: #50358c;
            color:white;
        }
        a{
            color:white;
        }
    </style>
   </head>
   
   <body>

      <!-- ******************** HEADER ********************  -->

        <header style="display: flex;">
          
            <img src="../img/logo.png" id="logo" alt="logo">
            <nav id="navmenu">
                <ul id="ulMenu">
                    <li><a href="../index.php" style="color:inherit;">Home</a></li>
                    <li><a href="formTicket.php">My Ticket</a></li>
                    <li><a href="afficheListeTickets.php" class="active">Tickets</a></li>
                    <li><a href="http://localhost/wordpress">Cy Zoo</a></li>
                </ul>
            </nav>
            
            <?php
            require_once("displayFunctions.php");
            isConnected("");
            ?>
            
        </header>
    
        <!-- ******************** TICKETS TABLE ********************  -->
        
      <div class="container">
         <h2 style="margin-top:2%;">Tickets</h2>
         <table class="table">
            <thead>
               <tr>
                  <th>Id</th>
                  <th>Date</th>
                  <th>Login</th>
                  <th>Subject</th>
                  <th>Priority</th>
                  <th>Description</th>
                  <th>Sector</th>
                  <th>Status</th>
               </tr>
            </thead>
            <tbody>
                <?php
                //Functions file call
                require_once("displayFunctions.php");
                //Display all tickets
                getAllTickets();
                ?>
            </tbody>
         </table>
      </div>
      
        <!-- ******************** MODIFICATIONS FORM ********************  -->
        
      <div style="text-align:center;padding-bottom:5%;padding-top:2%;">
          
         <form method="post" onsubmit="return false;" class="formTicket">
             <label for="">Ticket ID </label>
                   <input type="text" name="id" id="id" required>
             <label for="lname">Modify status ?</label>
             <select name="status" id="status-select">
                   <option value="fixed">Fixed</option>
                   <option value="onGoing">on Going</option>
             </select>
    
             <button type="submit" class="btn btn-primary" onclick="changeStatusTicket();">Submit</button>
         </form>
         
         <p id="refresh"></p>
         
      </div>
     
   </body>
</html>