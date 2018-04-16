console.log( "labas as cia" );





//=====================PASIKARTOJIMAS==================

//  0 UZDUOTIS
//  sukurti funkcija "printKaina(x)" ,
//  kuri atspausdina i konsole "x" reiksme
//  iskviesti f-ja 3 kartus, kad atspausdintu 3 skirtingas kainas:  999.00 , 13.49, 100.05
//  PAGALBA: vietoj x irasyti, koki nors teksta pvz: printKaina( 999.00);

function printKaina(x) {
    console.log(  x  );
}

printKaina( 999.00 );
printKaina( 13.49 );
printKaina( 105.05 );


// 1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis()", kuri apskaiciuoja vidurki is  5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki (pazymius sukurti f-jos viduje) 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)

function pazymiuVidurkis() {
    // local - nepasiekiami uz f-jos
    var a = 5;
    var b = 10;
    var c = 8;
    var d = 6;
    var e = 8;
    var vidurkis = (a + b + c + d + e )  / 5;
    console.log( vidurkis );
}
// iskvietimas
pazymiuVidurkis();

// 1.1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis1(x1, x2, x3, x4, x5)", kuriai galima paduoti 5 kintamuosius,
// kuri apskaiciuoja vidurki is paduotu 5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki, 5, 10, 8, 6, 8  (ir atspausdintu vidurki)

function pazymiuVidurkis1(x1, x2, x3, x4, x5) {
    var vidurkis = (x1 + x2 + x3 + x4 + x5)   / 5;
    console.log( vidurkis);
}
//
  pazymiuVidurkis1( 10, 5, 5 , 6 ,10);
