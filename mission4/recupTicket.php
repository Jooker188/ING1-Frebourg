<?php
$email = $_POST["login"];
$subject = $_POST["subject"];
$priority = $_POST["priority"];
$description = $_POST["description"];
$sector = $_POST["sector"];
$status = $_POST["status"];

if(isset($email) && isset($subject)  &&isset($description) && isset($status) && isset($sector) && isset($priority)){
    echo "Email : " . $email;
    echo "<br>Subject : " . $subject;
    echo "<br>Priority : " . $priority;
    echo "<br>Description : " . $description;
    echo "<br>Sector : " . $sector;
    echo "<br>Status : " . $status;
}
else{
    echo 'error';
}
?>