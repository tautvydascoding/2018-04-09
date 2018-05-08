<?php
require_once("libs/db-connect.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
  $username = $_POST["uname"];
  $password = $_POST["password"];
  $username_err = $password_err = "";

  $sql = "SELECT uname, password FROM users WHERE uname = ?";

  if($stmt = getConnection()->prepare($sql)){
    $stmt->bind_param("s", $param_username);
    $param_username = $username;

    if($stmt->execute()){
      $stmt->store_result();

      if($stmt->num_rows == 1){
        $stmt->bind_result($username, $hashed_password);
        if($stmt->fetch()){
          if(password_verify($password, $hashed_password)){
            session_start();
            $_SESSION['uname'] = $username;
          } else{
            $password_err = 'password';
          }
        }
      } else{
        $username_err = 'uname';
      }
    } else{
      echo "Oops!";
    }
  }
  $stmt->close();
}

echo $username_err;
echo $password_err;
