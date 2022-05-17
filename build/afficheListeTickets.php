<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Tickets</title>
      <link rel="stylesheet" href="header.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
      <style>
         body{
            background-color: #50358c;
            color:white;
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
                    <li><a href="afficheListeTickets.php" class="active">Tickets</a></li>
                    <li><a href="http://localhost/wordpress">Cy Zoo</a></li>
                </ul>
            </nav>
            <a href="authentification.html"><button id="button">Connexion</button></a>
    </header>

      <div class="container">
         <h2>Tickets</h2>
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
                $server = "localhost";
                $user = "root";
                $password = "";

                try{
                    $connection = new PDO("mysql:host=$server;dbname=zootickoon", $user, $password);
                    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    $sql = "SELECT * from ticket";
                    $req = $connection->query($sql);

                    foreach($req as $row){
                        echo '<tr>';
                        echo '<td>' . $row["id"] . '</td>';
                        echo '<td>' . $row["datet"] . '</td>';
                        echo '<td>' . $row["login"] . '</td>';
                        echo '<td>' . $row["subject"] . '</td>';
                        echo '<td>' . $row["description"] . '</td>';
                        echo '<td>' . $row["priority"] . '</td>';
                        echo '<td>' . $row["sector"] . '</td>';
                        echo '<td>' . $row["status"] . '</td>';
                        echo '</tr>';
                    }
                }

                catch(PDOException $e){
                    echo 'Error :' . $e->getMessage();
                }

                ?>
            </tbody>
         </table>
      </div>
      
      <div style="text-align:center;margin-top:5%;">
         <form method="post" action="modifierTicket.php" class="formTicket">
         <label for="">Ticket ID </label>
               <input type="text" name="id" required>
         <label for="lname">Modify status ?</label>
         <select name="status" id="status-select">
               <option value="fixed">Fixed</option>
               <option value="onGoing">on Going</option>
         </select>

         <button type="submit" class="btn btn-primary">Submit</button>
         </form>
      </div>

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
   </body>
</html>