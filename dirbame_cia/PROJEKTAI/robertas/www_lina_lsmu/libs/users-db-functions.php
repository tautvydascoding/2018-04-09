<?php
require_once("db-connect.php");
define("TABLE_NAME", "users");

function addUser($fname, $lname, $uname, $email, $password){
  $sql = sprintf(
    "INSERT INTO " . TABLE_NAME .
    " VALUES('', '%s', '%s', '%s', '%s','%s');",
    htmlspecialchars($fname, ENT_QUOTES, 'UTF-8'),
    htmlspecialchars($lname, ENT_QUOTES, 'UTF-8'),
    htmlspecialchars($uname, ENT_QUOTES, 'UTF-8'),
    htmlspecialchars($email, ENT_QUOTES, 'UTF-8'),
    password_hash(
      htmlspecialchars($password, ENT_QUOTES, 'UTF-8'),
      PASSWORD_DEFAULT
    )
  );

  mysqli_query(getConnection(), $sql);
}

function isEmailRegistered($email){
  $sql = sprintf(
    "SELECT email FROM ".TABLE_NAME." WHERE email='%s';",
    htmlspecialchars($email, ENT_QUOTES, 'UTF-8')
  );

  $result = mysqli_query(getConnection(), $sql);
  return mysqli_num_rows($result) > 0;
}
