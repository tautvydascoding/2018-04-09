<?php
define("TABLE_CHANNELS", "channels");
define("COLUMN_CHANNELS_ID", "id");
define("COLUMN_CHANNELS_NAME", "name");

define("TABLE_IMAGES", "images");
define("TABLE_USERS", "users");
define("TABLE_USERS_CHANNELS", "users_channels");

function getAllRowsOfTable($param_tableName) {
  switch($param_tableName) {
    case TABLE_CHANNELS:
      $tbl = TABLE_CHANNELS;
      break;
    case TABLE_IMAGES:
      $tbl = TABLE_IMAGES;
      break;
    case TABLE_USERS:
      $tbl = TABLE_USERS;
      break;
    case TABLE_USERS_CHANNELS:
      $tbl = TABLE_USERS_CHANNELS;
      break;
    default:
      echo "Error! Table not in whitelist!";
      return;
  }

  $sql = "SELECT * FROM $tbl";
  $result = mysqli_query(getConnection(), $sql);

  if(mysqli_num_rows($result) > 0){
    $rows = array();

    while ($row = mysqli_fetch_assoc($result)){
      array_push($rows, $row);
    }

    return $rows;
  } else {
    echo "Error! No rows found in table!";
  }
}
