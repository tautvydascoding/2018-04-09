<?php

// 2) sukurti matrica:
// Tomas, 1981, Buhalteris
// Ona 1980 Programuotoja
// Petras, 1975, Direktorius
// 2.1) atspausdinti su FOR ciklu
// 2.2) atspausdinti su FOR FOR ciklu
// 2.3) atspausdinti su FOREACH

$visiDarbuotojai = [];
$x1 = ['Tomas',  1981, 'Buhalteris'];
$x2 = ['Ona',    1980, 'Programuotoja'];
$x3 = ['Petras', 1975, 'Direktorius'];

$visiDarbuotojai[0] = $x1;
$visiDarbuotojai[1] = $x2;
$visiDarbuotojai[2] = $x3;

// print_r(   $visiDarbuotojai   ); // test


for ($i=0; $i < count($visiDarbuotojai) ; $i++) {
    echo $visiDarbuotojai[$i][0];
    echo $visiDarbuotojai[$i][1];
    echo $visiDarbuotojai[$i][2];
    echo "<br />";
}

// ==========================for for===
echo "<h2>for for ciklu</h2>";

for ($i=0; $i < count($visiDarbuotojai) ; $i++) {
    for ($kk=0; $kk < 3; $kk++) {
        //            [darbuotojas][vardas/data/pareigos]
        echo $visiDarbuotojai[ $i ][ $kk ];  // $kk = 0, =1, =2
    }
    echo "<br />";
}

// ==========================for for===
echo "<h2>foreach Ciklas</h2>";
foreach ($visiDarbuotojai as $stalciausTurinys) {
    echo $stalciausTurinys[0]; // vardas
    echo $stalciausTurinys[1]; // data
    echo $stalciausTurinys[2]; // pareigos
    echo "<br />";
}
//
