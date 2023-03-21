<?php

  $connect = mysqli_connect('localhost','root','','reservation_db');
      
  if ($connect->connect_error) {
  die("Connection failed: " . $connect->connect_error);
}
?>