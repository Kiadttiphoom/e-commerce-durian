<?php include 'connect.php'; ?>


<?php

   
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST[ 'email'];
$date = $_POST[ 'date'];
$tel = $_POST[ 'tel'];
$details = $_POST[ 'details'];
        
       
 mysqli_query($connect,"INSERT INTO reservation (first_name, last_name, email, date, tel, details) values ('$first_name', '$last_name', '$email', '$date', '$tel', '$details')");     
     


?>