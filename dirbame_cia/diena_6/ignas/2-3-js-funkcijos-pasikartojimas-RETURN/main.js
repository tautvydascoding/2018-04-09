console.log( "labas as cia" );

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
// local var
  var a = 5;
  var b = 10;
  var c = 8;
  var d = 6;
  var e = 8;
  var vidurkis = (a+b+c+d+e)/5;
  console.log(vidurkis);
}
//iskvietimas
pazymiuVidurkis();


// 1.1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis1(x1, x2, x3, x4, x5)", kuriai galima paduoti 5 kintamuosius,
// kuri apskaiciuoja vidurki is paduotu 5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki, 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)

function pazymiuVidurkis1(x1, x2, x3, x4, x5) {
  console.log((x1+x2+x3+x4+x5)/5);
}
  pazymiuVidurkis1(5, 10, 8, 6, 8);
  pazymiuVidurkis1(5, 10, 8, 6, 8);

// taisyklingesnis variantas
                                      //{
  // var vidurkis = (x1+x2+x3+x4+x5)/5;
  // return vidurkis;
  // arba
  // return (x1+x2+x3+x4+x5)/5;
//}

  //var joniukas = pazymiuVidurkis(8, 2, 3, 10, 9);
  //var gretute = pazymiuVidurkis1(6, 5, 7, 8, 9);

  //console.log (joniukas);
  //console.log (gretute);



//=====================RETURN==================

// 2 UZDUOTIS
// parasyti f-ja "getVardas()", kuri turi "return" zodeli ir grazina varda i iskveitimo vieta.
// sukurti kintamaji "vardas" Tomas
// patikrinti ar veikia f-ja

function getVardas() {
  var name = 'Tomas';
  return name;
}
 var y = getVardas();
 console.log( y, "mano vardas: Ignas" );
 // arba
// console.log(  getVardas( ) );




// 3 UZDUOTIS
// parasyti f-ja "getVardasPavarde()", kuri turi "return" zodeli ir grazina varda ir pavarde i iskveitimo vieta.
// sukurti kintamaji   "pavarde" Tomauskas, vardas - Antanas
// patikrinti ar veikia f-ja

function getVardasPavarde() {
  var vardas = "Antanas";
  var pavarde = "Tomauskas";
  var kombinacija = vardas + " " + pavarde;
  return kombinacija;
}

var z = getVardasPavarde();
console.log( z );
// arba trumpesniu budu
// console.log( getVardasPavarde());

// 4 UZDUOTIS
// A) sukurti h1 su tekstu viduje  (HTML faile)
// B) sukurti f-ja "getH1ElementoAukstis(), kuri su "return" grazina surenderinto h1 elemento auksti
// C) su CSS pakeisti h1 auksti, ir paziureti ar jusu f-ja veikia


// 4.1 UZDUOTIS
// parasyti f-ja, kuri turi "return" zodeli.
// "getPazymiuVidurkis2(x1, x2, x3, x4, x5)"  f-ja apskaiciuoja vidurki is paduotu 5 menesiu pazymiu (ir grazina atsakyma i iskvietimo vieta! "return atskymas;")
