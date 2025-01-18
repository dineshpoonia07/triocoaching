<?php
  $email = $_POST["email"];
  $password = $_POST["password"];

  $conn =new mysqli('localhost', 'Admin','Admin@123','loginn')
  if(mysqli_connect_errno){
    die(''. mysqli_connect_error);
  }else{}
?>
