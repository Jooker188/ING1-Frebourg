<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../style/formTicket.css">
    <link rel="stylesheet" href="../style/globalStyle.css">
    
    <link rel="icon" href="../img/logo.ico" />
    <title>Ticket Cy Zoo</title>
</head>

  <body>

       <!-- ******************** HEADER ********************  -->

       <header>
        <img src="../img/logo.png" id="logo" alt="logo">
        <nav id="navmenu">
            <ul id="ulMenu">
                <li><a href="../index.php">Home</a></li>
                <li><a href="formTicket.php" class="active">My Ticket</a></li>
                <li><a href="afficheListeTickets.php">Tickets</a></li>
                <li><a href="http://localhost/wordpress">Cy Zoo</a></li>
            </ul>
        </nav>
            <?php
            require_once("displayFunctions.php");
            isConnected("");
            ?>
</header>
     <!-- ******************** FORMULAIRE ********************  -->
     
     <?php
        require_once("displayFunctions.php");
        redirectionToAuth();
     ?>

      <div id="container">
        <form method="post" action="createTicket.php" id="form">

            <div class="form-group">
                <label for="subject">Subject</label>
                <input  class="form-control" name="subject" id="exampleInputPassword1" placeholder="Subject">
            </div>

            <div class="form-group">
                <label for="priority">Priority level</label>
                <div class="form-group">
                    <select name="priority" id="">
                        <option value="Low">Low</option>
                        <option value="Normal">Normal</option>
                        <option value="High">High</option>
                        <option value="Critical">Critical</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" id="description" placeholder="Description" rows="4" cols="45"></textarea>
            </div>

            <div class="form-group">
                <label for="sector">Zoo Sector</label>
                <div class="form-group">
                    <select name="sector" id="" name="sector">
                        <option value="Bud">Pool Party</option>
                        <option value="Gorgeous">Attraction</option>
                        <option value="Candy">Cook</option>
                        <option value="Etno">Learning</option>
                    </select>
               </div>
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <div class="form-group">
                    <select name="status" id="">
                        <option value="onGoing">On Going</option>
                        <option value="fixed">Fixed</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary" id="submit">Submit</button>
            
          </form>
          
         
      </body>
      </div>

</html>