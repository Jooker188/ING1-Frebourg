<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Tickets</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
   </head>
   <body>
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
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
   </body>
</html>