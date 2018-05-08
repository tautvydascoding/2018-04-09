<?php
require_once("libs/db-connect.php");
define("TABLE_NAME", "images");

function getImage($id){
  $sql = "SELECT * FROM " . TABLE_NAME . " WHERE id='$id'";
  $result = mysqli_query(getConnection(), $sql);

  if(mysqli_num_rows($result) > 0){
    return mysqli_fetch_assoc($result);
  } else{
    echo "ERROR! id '" . $id . "' not found in table '" . TABLE_NAME . "'";
  }
}

function getAllImages(){
  $sql = "SELECT * FROM " . TABLE_NAME;
  $result = mysqli_query(getConnection(), $sql);

  if(mysqli_num_rows($result) > 0){
    $rows = array();

    while ($row = mysqli_fetch_assoc($result)){
      array_push($rows, $row);
    }

    return $rows;
  } else {
    echo "ERROR! No rows found in table '" . TABLE_NAME . "'";
  }
}

function deleteImage($id){
  $sql = "DELETE FROM ".TABLE_NAME." WHERE id=$id LIMIT 1;";
  mysqli_query(getConnection(), $sql);
}
