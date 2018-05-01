<?php
  // 2018-04-26
  // Robertas

  // kintamuju vardai, reiksme
  define("HOST", "localhost");
  define("MYSQL_USERNAME", "robertas");
  define("MYSQL_PASSWORD", "root");
  define("DB_NAME", "hospital4");

  // jungiames pr. DB 'hospital4'
  $connection = mysqli_connect(HOST, MYSQL_USERNAME, MYSQL_PASSWORD, DB_NAME, 3306);

  function getConnection(){
    global $connection;

    if($connection){
      // echo "All is good! <br>";
      return $connection;
    }else{
      echo "ERROR! " . mysqli_connect_error();
    }
  }

  function getDoctor($id){
    $mano_sql = "SELECT * FROM doctors WHERE id='$id'";
    $rezultatai = mysqli_query(getConnection(), $mano_sql);

    if(mysqli_num_rows($rezultatai) > 0){
      //var_dump($rezultatai);
      $rezultatai = mysqli_fetch_assoc($rezultatai);
      //print_r($rezultatai);
      return $rezultatai;
    }else{
      echo "ID not found!";
    }
  }
?>
