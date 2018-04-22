console.log( "labas as cia" );

// 1 UZDUOTIS:
// sukurti mokinio objekta  : vardas, pavarde, kelintokas, mokinio matematikos pazymiai (6, 5, 9 , 10, 8), sukurti funkcija 'begti';

var mokinys = {
  vardas: "Petras",
  pavarde: "Petrutis",
  kelintokas: "treciokas",
  pazymiai: [6, 5, 9, 10, 8],
  eiti: function() {
    console.log( "einu");
  }
};
mokinys.eiti();


// 1.1 UZDUOTIS
// atspauzdinti visus duomenis

console.log( "Kas per mokinys?", mokinys.vardas, mokinys.pavarde, mokinys.pazymiai );
document.querySelector('h1').innerHTML = mokinys.pavarde;
    // i DOM'a nemoka isvesti viso objekto (taip kaip su console.log mes matome)- i ekrana isvedant butina nuordyti ka konkreciai mes norime isvesti i ekrana, t.y. pvz siuo atveju mokinys.pavarde. Nes jeigu rasau tik mokinys (viso objekto pavadinima), tai ismeta klaida!!!!

// 1.2.pakeisti klase, kurioje mokosii astunta ir pakeisti visus matematikos pazymius i naujus: 9, 10, 4, 5, 8; ir prideti nauja funkcija - begu begu;

mokinys.kelintokas = "astuntokas";
mokinys.pazymiai = [9, 10, 4, 5, 8];

console.log( "Pakeiciau:", mokinys );

mokinys.begti = function() {
  console.log( "Begu begu" );
};
mokinys.begti();


// 2 UZDUOTIS: sukurti 2-u objektus:
// 1) tevas : vardas, pavarde, vaikas
// 2) vaikas: klase, vardas
// 3) priskirti tevo objekui (kintamajam) vaika

var tevas = {
  vardas: "Jonas",
  pavarde: "Jonaitis",
  vaikas: {}
};

var vaikas = {
  klase: "antrokas",
  vardas: "Petras"
};

tevas.vaikas = vaikas;

console.log( tevas, vaikas );


///   CONSTRUKTORIUS!!!!!

// //============3=pvz: construktorius =====

// funkcijos kurimas
function Car(nr, c, ms) {
    this.numberOfDoors = nr;
    this.color = c;
    this.maxSpeed = ms;
}

// // objekto kurimas
var AudiTT = new Car(2, "red", 280);

console.log( AudiTT );


// 3 UZDUOTIS
// sukurti  objekto "darbuotojas" construktoriu. Objektas darbuotojas: nr, vardas, pavarde, alga

function Darbuotojas(nr, v, p, a) {
  this.numeris = nr;
  this.vardas = v;
  this.pavarde = p;
  this.alga = a;
}

var naujasDarbuotojas = new Darbuotojas(1, "Petras", "Petraitis", 2000 );
var naujasDarbuotojas1 = new Darbuotojas(2, "Jolanta", "Jolantele", 5000);
var naujasDarbuotojas2 = new Darbuotojas(3, "Saulius", "Saulenas", 10000);

console.log(naujasDarbuotojas, naujasDarbuotojas1, naujasDarbuotojas2);

document.querySelector("h1").innerHTML = naujasDarbuotojas.vardas;
  // i DOM'a nemoka isvesti viso objekto (taip kaip su console.log mes matome)- i ekrana isvedant butina nuordyti ka konkreciai mes norime isvesti i ekrana, t.y. pvz siuo atveju naujasDarbuotojas.vardas; Nes jeigu rasau tik naujasDarbuotojas (viso objekto pavadinima), tai ismeta klaida!!!!



//////
