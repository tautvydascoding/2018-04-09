<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'robertas');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'lina_lsmu');
define('DB_PORT', '3306');
define('DB_CHARSET', 'utf8mb4');

$connection = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);
if(!$connection) die("ERROR: Could not connect. " . $connection->connect_error);
$connection->set_charset(DB_CHARSET);

function getConnection(){
  global $connection;
  if($connection) return $connection;
  else echo "ERROR: Could not connect. " . $connection->connect_error;
}
