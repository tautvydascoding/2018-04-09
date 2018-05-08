<?php
require_once("libs/users-db-functions.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
  $error = "";
  $email = $_POST["email"];

  if(!isEmailRegistered($email)) {
    $error = "email-not-registered";
  }else{
    $channels = $_POST["channels"];
  }
  
  echo $error;
}
