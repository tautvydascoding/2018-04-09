<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.0/normalize.css">
        <link rel="stylesheet" href="libs/bootstrap4/css/bootstrap.css">

        <!-- !!! mano CSS failas visada pats zemiausias -->
        <link rel="stylesheet" href="css/master.css">
    </head>



    <body>
            <h1> Isijunk   </h1>

  <?php
  <form   action="registracija.php" method="get ">
      <input type="text"    name="vardas" placeholder="Jusu vardas">
      <input type="text"   name="pavarde" placeholder="Jusu pavarde">
      <input type="number" name="tel" placeholder="Jusu telefonas">

      <input type="submit"  onclick=" suma(10,20) " value="Registruotis">
      <!-- arba -->
      <button type="submit" name="button">
           Registruotis
      </button>
  </form>


//daug gydytoju paemimas
function getDoctors( $kiekis = 999) {//  = 9999 - default reiksme (value), jeigu
//nenurodiai
$manoSQL = " SELECT * FROM doctors LIMIT $kiekis ";

//tikrinima ar radome nors viena gydytoja
if (mysqli_num_rows($rezultatai) > 0 {
    echo "radome gydytojus";
    return
}

}
//=================panaudojimas=========getDoctors=============

// is savo 4 gydytoju paime pirmaji
$vienasGydytojas = mysqli_fetch_assoc( $pirmi_4_gydytojai );

// Ar cia tiesa?
while ($vienasGydytojas){
    echo "$vienasGydytojas['name']. " ". $vienasGydytojas;
}

 ?>



       <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <script src="libs/jquery-3.2.1.min.js">     </script>

        <!-- !!!  mano js visada zemiau -->
        <script src="main.js">  </script>
    </body>
</html>
