console.log( "labas as cia" );
//

// 1 UZDUOTIS:
// sukurti mokinio objekta  : vardas, pavarde, kelintokas, mokinio matematikos pazymiai (6, 5, 9 , 10, 8)

// 1.1 UZDUOTIS
// atspauzdinti visus duomenis


// initialisation tai yra kintamo kurimo metu, reiksmes priskyrimas
var mokinys = {
  vardas: "Tadukas",
  pavarde: "Utele",
  klase: 5,
  pazymiai : [6, 5, 9, 10, 8],
  eiti: function(){
    console.log('einu einu ....');
  }
};

// console.log("name is :" vardas); // ateis erroras, nes vardas yra objekto property!
console.log("vardas: ", mokinys.vardas);
console.log("pavarde: ", mokinys.pavarde);
console.log("klase: ", mokinys.klase);
console.log("pazymiai: ", mokinys.pazymiai);
mokinys.eiti();

console.log(mokinys);
// document.querySelector('h1').innerHTML = ;
//UZDUOTIS 1.2
// pakeisti klase i sekancia
// pakeisti visus 6 pazymius

mokinys.klase = 6;

console.log(mokinys.klase);

mokinys.pazymiai.splice(0,4,7,7,6,6,5);

console.log(mokinys);



// 2 UZDUOTIS: sukurti 2-u objektus:


// 1) tevas : vardas, pavarde, vaikas

var tevas = {
  vardas: "Petras",
  pavarde: "Petrauskas",
  vaikas: "Tadukas", // galima kurtis ir masyva, jei butu daugiau vaiku.
};

// 2) vaikas: klase, vardas
var vaikas = {
  klase: 8,
  vardas: "Petriukas",
};

console.log(tevas);
console.log(vaikas);

// 3) priskirti tevo objekui (kintamajam) vaika

tevas.vaikas = vaikas;

console.log(tevas);
// 3 UZDUOTIS
// sukurti  objekto "darbuotojas" construktoriu. Objektas darbuotojas: nr, vardas, pavarde, alga

function darbuotojas(nr, vardas, pavarde, alga, gimtadienis){
  this.nr = nr;
  this.vardas = vardas;
  this.pavarde = pavarde;
  this.alga = alga;
  this.gimtadienis = gimtadienis;
}

var diktatorius = new darbuotojas(1 ,"Adolfas", "Hitleris", 1889, "1889 04 20");

console.log(diktatorius);

var mokslininkas = new darbuotojas(2 ,"Jozifas", "Mengele", 1911, "1911 03 16");

console.log(mokslininkas);


//============3=pvz: construktorius =====
function Car(nr, c, ms) {
    this.numberOfDoors = nr;
    this.color = c;
    this.maxSpeed = ms;
}

// objekto kurimas
var AudiTT = new Car(2, "red", 280);

console.log(AudiTT);
