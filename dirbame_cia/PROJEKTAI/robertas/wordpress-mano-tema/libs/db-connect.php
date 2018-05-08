<?php
define("HOST", "localhost");
define("MYSQL_USERNAME", "robertas");
define("MYSQL_PASSWORD", "root");
define("DB_NAME", "lina_lsmu");

$connection = mysqli_connect(HOST, MYSQL_USERNAME, MYSQL_PASSWORD, DB_NAME, 3306);

function getConnection(){
  global $connection;

  if($connection){ return $connection; }
  else{ echo "DB CONNECTION ERROR! " . mysqli_connect_error(); }
}
