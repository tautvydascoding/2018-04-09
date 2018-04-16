
//2 uzdavinys

function pazymiuVidurkis () {

  var a = 5;
  var b = 10;
  var c = 8;
  var d= 6;
  var e = 8;
  var vidurkis = (a + b + c + d + e ) / 5;
  console.log( vidurkis );
}

pazymiuVidurkis ();


// 3 uzdavinys// 1.1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis1(x1, x2, x3, x4, x5)", kuriai galima paduoti 5 kintamuosius,
// kuri apskaiciuoja vidurki is paduotu 5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki, 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)

function pazymiuVidurkis1 (x1, x2, x3, x4, x5) {
     var vidurkis = ( x1 + x2 + x3+ x4 + x5) / 5;
     return vidurkis;
}


var joniukas = pazymiuVidurkis1 (10, 5, 5, 6, 10);
var gretute = pazymiuVidurkis1 (1, 8, 8, 8, 9);

console.log ( joniukas );
console.log ( gretute );

//FUNKCIJOS RETURN

function getVardas () {
  var name = "juozas";
  return name;
}
getVardas(); // juozas
console.log( getVardas () ); //juozas

//arba

//var y = getVardas () {
//   var name = 'juozas';
//   return name;
// }
 //var y= getVardas ();
 //console.log ( "mano vareas: ", y);

// 2 UZDUOTIS
// parasyti f-ja "getVardas()", kuri turi "return" zodeli ir grazina varda i iskveitimo vieta.
// sukurti kintamaji "vardas" Tomas
// patikrinti ar veikia f-ja





// 3 UZDUOTIS
// parasyti f-ja "getVardasPavarde()", kuri turi "return" zodeli ir grazina varda ir pavarde i iskveitimo vieta.
// sukurti kintamaji   "pavarde" Tomauskas, vardas - Antanas
// patikrinti ar veikia f-ja

function getVardasPavarde () {
  var pavarde = ' Tomaukas ';
  var vardas = 'Antanas';
  var tekstas = vardas + " " + pavarde;
  return tekstas;
}

console.log (getVardasPavarde () );

//arba
// var z = getVardasPavarde () ;
// console.log ( z );





// 4 UZDUOTIS
// A) sukurti h1 su tekstu viduje  (HTML faile)
// B) sukurti f-ja "getH1ElementoAukstis(), kuri su "return" grazina surenderinto h1 elemento auksti
// C) su CSS pakeisti h1 auksti, ir paziureti ar jusu f-ja veikia


// 4.1 UZDUOTIS
// parasyti f-ja, kuri turi "return" zodeli.
// "getPazymiuVidurkis2(x1, x2, x3, x4, x5)"  f-ja apskaiciuoja vidurki is paduotu 5 menesiu pazymiu (ir grazina atsakyma i iskvietimo vieta! "return atskymas;")


// =================FOR intro  ======================

// 1 UZDUOTIS
// naudojant FOR cikla, atspausdinti  "#" tiek, kad gautusi trikampio vaizdas
