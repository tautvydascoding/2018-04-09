<?php  // atidaromas bet neuzdaromas, nes reiks includint

echo "junkis <br />";

// prisijungimas prie SQL duombazes: apsirasom kintamuosius
$naudojamaDB = "hospital4"; // galesiu keist prisijungio parametrus per cia
//
define("host", "localhost");
define("user", "root");
define("pass", "root");
define("duombaze", $naudojamaDB);
// echo host;

//my sqli  funkcija prijungia, kad parametrai nedingtu, pasikuriu kintamaji;

$prisijungimas = mysqli_connect( host, user, pass, duombaze);
//
// //tikrinimas ar pavyko prisijungti
//
function getPrisijungimas(){
  global $prisijungimas; // pasiimu globalu kintamaji
if ($prisijungimas){
      echo "tau pavyko! <br>";
  } else{
    echo "Tau nepavyko prisijungti prie duombazes: <br/>".mysqli_connect_error();
  }
}

getPrisijungimas();


function getDoctor(){
$sqlUzklausa = "SELECT * FROM doctors WHERE id='$NR';
";
}
$rezultatai
