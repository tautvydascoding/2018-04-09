<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Title</title>
  <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.0/normalize.css">
  <link rel="stylesheet" href="libs/bootstrap4/css/bootstrap.css">
  <link rel="stylesheet" href="css/master.css">
</head>

<body>
  <?php include_once("doctors_functions.php"); ?>

  <form class="d-inline-block pb-3"action="#" method="get">
    <input type="text" name="name" placeholder="Vardenis">
    <input type="text" name="lname" placeholder="Pavardenis">
    <input type="submit" value="Add doctor">
  </form>

  <?php
    $name = (array_key_exists ('name', $_GET) ? $_GET['name'] : NULL);
    $lname = (array_key_exists ('lname', $_GET) ? $_GET['lname'] : NULL);

    if(array_key_exists ('delete', $_GET)){
      deleteDoctor($_GET['delete']);
    }

    if($name == NULL || $lname == NULL){
      print("ERROR: Bad input");
    }else{
      createDoctor($name, $lname);
    }

    print("<br>");

    foreach (getAllDoctors() as $value){
      print(
        "<form class='d-inline-block' action='#' method='get'>
        <button type='submit' name='delete' value='".$value['id']."'>Delete</button>
        </form>
        <a class='d-inline-block' href='template-gydytojas.php?id=".$value['id']."'>".$value['name']." ". $value['lname'] ."</a>
        <br>
        "
      );
    }
  ?>

  <script src="libs/jquery-3.2.1.min.js"></script>
  <script src="main.js"></script>
</body>

</html>
