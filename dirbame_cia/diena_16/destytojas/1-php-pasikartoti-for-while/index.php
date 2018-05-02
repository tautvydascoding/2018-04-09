<?php

// ---- -PASIKARTOJIMAS PROGRAMAVIMO PAGRINDU TESTUI-----
// 1) sukurti masyva : 1981, 1980, 1975, 1995, 1999
// 1.1) atspausdinti masyva naudojant FOR cikla, While cikla ir FOREACH cikla
// 1.4 Atspausdinti kas antra data
// 1.5 Atspasudinti visas datas nuo 3-cios (iskaitant 3-cia)

// paprastas masyvas
$datos = [1981, 1980, 1975, 1995, 1999];
// asociatyvus masyvas
$DarbuotojuDatos = ['jonas'=>1981, 'petras'=> 1980, 'tomas'=> 1975, 'alma'=>1995, 'algis'=> 1999];

for ($i=0; $i <  count($datos); $i++) {
    echo $datos[$i] . "<br />";
}

// foreach ($DarbuotojuDatos as $value) {
foreach ($DarbuotojuDatos as $stalciausPavadinimas => $stalciausTurinys) { // $stalciausTurinys - isisgalvotas kintamasis, kuris saugo vieno stalciaus turini
     echo $stalciausPavadinimas . " : " . $stalciausTurinys . "<br />";
}

//
$kk = 0;
while ($kk <  count($datos)) {
    echo $datos[$kk] . "<br />";

    if ($kk == 1000) {
        echo "Kazkas negerai EROROR: 001";
        break;
    }
    //!!!
    $kk++;
}

//// 1.4 Atspausdinti kas antra data
echo "<h2>Kas antras elementas</h2>";
// for ($i=0,  $k=1  ;       $i <  count($datos)  &&  $k > 0    ; $i = $i + 2) {   //  $i += 2;

for ($i=0  ;       $i <  5 ; $i = $i + 2) {
    echo $datos[$i] . "<br />";
}
// kam lygu $i


// 1.5 Atspasudinti visas datas nuo 3-cios (iskaitant 3-cia)
echo "<h2>Nuo trecios</h2>";

for ($i=2 ;    $i <  5 ; $i++) {  
    echo $datos[$i] . "<br />";
}
// kam lygu $i


//
