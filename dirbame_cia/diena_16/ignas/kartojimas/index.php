<!-- // - -PASIKARTOJIMAS PROGRAMAVIMO PAGRINDU TESTUI-
// 1) sukurti masyva : 1981, 1980, 1975, 1995, 1999
// 1.1) atspausdinti masyva naudojant FOR cikla, While cikla ir FOREACH cikla
// 1.4 Atspausdinti kas antra data
// 1.5 Atspasudinti visas datas nuo 3-cios (iskaitant 3-cia) -->

<?php 
    $datos = [1981, 1980, 1975, 1995, 1999];

    for ($i=0; $i < count($datos); $i++) { 
        echo $datos[$i];
    }

    foreach ($datos as $stalciausPavadinimas => $issigalvotasStalciausTurinys) {
        echo $stalciausPavadinimas . $issigalvotasStalciausTurinys . "<br>";
    }


    $kk = 0;
    while ($kk <= count($datos)) {
        //!!! patys padidiname kk
        
        echo $datos[$kk] . "<br>";
        if ($kk == 1000) {
            echo "kazkas negerai";
            break;
          }
        $kk++;
    }
    //kas antra data spausdinam
    for ($i=0; $i < count($datos) ; $i += 2) { 
        echo $datos[$i] . "<br>";
    }

?>


<!--// 2) sukurti matirca:
// Tomas, 1981, Buhalteris
// Ona 1980 Programuotoja
// Petras, 1975, Direktorius
// 2.1) atspausdinti su FOR ciklu
// 2.2) atspausdinti su FOR FOR ciklu
// 2.3) atspausdinti su FOREACH -->

<?php 

    $visiDarbuotojai = [];
    $x1 = [Tomas, 1981, Buhalteris];
    $x2 = [Ona, 1980, Programuotoja];
    $x3 = [Petras, 1975, Direktorius];

    $visiDarbuotojai[0] = $x1;
    $visiDarbuotojai[1] = $x2;
    $visiDarbuotojai[2] = $x3;

    for ($i=0; $i < count($visiDarbuotojai) ; $i++) { 
        echo $visiDarbuotojai[$i][0];
        echo $visiDarbuotojai[$i][1];
        echo $visiDarbuotojai[$i][2];
        echo "<br>";

    }


    for ($i=0; $i < count($visiDarbuotojai) ; $i++) { 
        for ($k=0; $k < 3 ; $k++) { 
            echo $visiDarbuotojai[$i][$k];
        }
            echo "<br>";
    }
