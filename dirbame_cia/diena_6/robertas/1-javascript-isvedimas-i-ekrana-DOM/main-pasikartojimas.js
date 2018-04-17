//=====================PASIKARTOJIMAS==================

//  0 UZDUOTIS
//  sukurti funkcija "printKaina(x)" ,
//  kuri atspausdina i konsole "x" reiksme
//  iskviesti f-ja 3 kartus, kad atspausdintu 3 skirtingas kainas:  999.00 , 13.49, 100.05
//  ir vietoj x irasyti, koki nors teksta pvz: printKaina( 999.00);

function printKaina(x) {
  console.log(x);
}

printKaina(999.00);
printKaina(13.49);
printKaina(100.05);

// 1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis()", kuri apskaiciuoja vidurki is  5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki (pazymius sukurti f-jos viduje) 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)

function pazymiuVidurkis() {
  var pazymiai = [5, 10, 8, 6, 8];
  var sum = pazymiai.reduce(function(a, b) {
    return a + b;
  });
  var avg = sum / pazymiai.length;

  console.log("Avg 1: " + avg);
}

pazymiuVidurkis();

// 1.1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis1(x1, x2, x3, x4, x5)", kuriai galima paduoti 5 kintamuosius,
// kuri apskaiciuoja vidurki is paduotu 5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki, 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)

function pazymiuVidurkis1(...x) {
  var pazymiai = Array.prototype.slice.call(arguments);
  var sum = pazymiai.reduce(function(a, b) {
    return a + b;
  });
  var avg = sum / pazymiai.length;

  console.log("Avg 2: " + avg);
}

pazymiuVidurkis1(5, 10, 8, 6, 8);
